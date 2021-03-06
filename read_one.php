<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read One Record - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>


<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Read Product</h1>
    </div>

    <!-- PHP read one record will be here -->
    <?php
        include_once 'form/read_one_product.php';
    ?>

    <!-- HTML read one record table will be here -->
    <!--we have our html table here where the record will be displayed-->
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES);  ?></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><?php echo htmlspecialchars($price, ENT_QUOTES);  ?></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>

</div> <!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>