<?php
if (!isset($_SESSION)) {

    session_start();
}

include "../conn.php";
$query2 = "insert into Request (propID,userID,SellerID) values('" . $_POST['propID'] . "','" . $_SESSION['ID'] . "','" . $_POST['sellerID'] . "')";

echo $query2;
$result2 = mysqli_query($conn, $query2);
if ($result2) {
    echo '<script>window.location.href= "http://localhost/realestate/buyer/requestprop.php";</script>';
}
