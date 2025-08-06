<?php
include "db.php";
include "header.html";
$sql = "select * from orderList";
$result = $conn->query($sql);
$sqlTotalOrder = "select count(*) from orderList";
$totalOrderResult = $conn->query($sqlTotalOrder);
$totalOrderRow = $totalOrderResult->fetch_assoc();
$totalOrder = $totalOrderRow['count(*)'];
$sqlTotalSale = "select sum(total) from orderList";
$totalSaleResult = $conn->query($sqlTotalSale);
$totalSaleRow = $totalSaleResult->fetch_assoc();
$totalSale = $totalSaleRow['sum(total)'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Food</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="list">
            <div class="summary">
        <div class="totalOrder">
            <p>Total Order <br> <?=$totalOrder?></p>
        </div>
        <div class="totalSale">
            <p>Total Sale <br> <?=$totalSale?></p>
        </div>
    </div>
    <div class="list">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Total</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) {?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['mobile']?></td>
                <td><?=$row['total']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>

</body>
</html>