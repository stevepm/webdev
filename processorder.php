<?php 
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

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