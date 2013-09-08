<?php 
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

define('TIREPRICE',100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalqty=0;
$totalqty=$tireqty+$oilqty+$sparkqty;
echo "Items order: ".$totalqty."<br />";
$totalamount=0.00;

$totalamount = $tireqty * TIREPRICE
            + $oilqty * OILPRICE
            + $sparkqty * SPARKPRICE;

echo "Subtotal: $".number_format($totalamount,2)."<br />";

$taxrate = 0.10; // local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."<br />";
?>

<html>
    <head>
        <title>Bob's Auto Parts</title>
    </head>
    <body>
        <h1>Bob's auto parts</h1>
        <h2>Order Results</h2>
        <?php
            echo '<p>Your order is as follows: </p>';
            echo $tireqty.' tires<br/>';
            echo $oilqty.' bottles of oil<br/>';
            echo $sparkqty.' spark plugs<br/>';
        ?>
        
    </body>
</html>