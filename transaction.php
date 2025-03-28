<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>

<?php
$con = mysqli_connect("localhost", "root", "", "bsms_db");

// Check connection
if($con === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$cart_query = mysqli_query($con, "SELECT * FROM `cart`") or die('query failed');
$grand_total = 0;
    if(mysqli_num_rows($cart_query) > 0){
        while($fetch_cart = mysqli_fetch_assoc($cart_query)){
            $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total += $sub_total;
                      }
                   }

// Retrieve form data
$id =="";
$name = $_REQUEST['name'];
$surname = $_REQUEST['lastname'];
$telephone = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$special_requests = $_REQUEST['specific'];
$amount = $grand_total;
$delivery_method = $_REQUEST['delivery'];
$payment_method = $_REQUEST['payment'];



// Insert data into database
$sql = "INSERT INTO transaction VALUES ('$id','$name', '$surname', '$telephone', '$email', '$address', '$special_requests', '$amount', '$delivery_method', '$payment_method')";

// Check if the query is successful
if ($con->query($sql) === TRUE){
    // Redirect to the home page after a brief delay (you can adjust the delay if needed)
    header("refresh:3;url=success.html");
    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>
</body>

</html>