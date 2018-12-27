<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Update a Record - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Update Product</h1>
    </div>

    <!-- PHP read record by ID will be here -->
    <?php
        include_once 'form/read_one_product.php';
    ?>

    <!-- HTML form to update record will be here -->
    <!--we have our html form here where new record information can be updated-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name' value="<?php echo htmlspecialchars($name, ENT_QUOTES);  ?>" class='form-control' /></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name='description' class='form-control' style="resize:none;"><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type='number' min=0 step='0.01' name='price' value="<?php echo htmlspecialchars($price, ENT_QUOTES);  ?>" class='form-control' /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' value='Save Changes' class='btn btn-primary' />
                    <a href='index.php' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </form>

    <!-- PHP post to update record will be here -->
    <?php
        include_once 'form/update_product.php';
    ?>

</div> <!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>