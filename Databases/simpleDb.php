<!-- First we will create the db to use and feed in the following details.

DB name: Students

data:
-->


<?php 
    $db = new mysqli("localhost", "root", "dollymint", "dairyyetu");

    if($db->connect_error){
        die("Connect Error({$db->connect_errno}){$db->connect_error}");
    }

    $productQuery = "SELECT* FROM products 
    WHERE price >= 1 ORDER BY name";

    $result = $db->query($productQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Introduction</title>
</head>
<body>
   <table cellSpacing="2" cellPadding="6" align="center" border="1">
    <tr>
        <td colspan="4">
            <h3 align="Center">These products are priced from Ksh. 1 onwards</h3>
        </td>
    </tr>

    <tr>
        <td align = "center">Name</td>
        <td align="center"> Price </td>
    </tr>

    <?php while($row= $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo stripslashes($row['name']); ?></td>
        <td><?php echo $row['price']; ?> </td>
    </tr>
    <?php } ?>
   </table>
</body>
</html>