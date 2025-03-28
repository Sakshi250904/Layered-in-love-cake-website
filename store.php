<?php
if(isset($_POST['add_to_cart'])){

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = $_POST['product_quantity'];

$select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name' ") or die('query failed');

if(mysqli_num_rows($select_cart) > 0){
   $message[] = 'product already added to cart!';
}else{
   mysqli_query($con, "INSERT INTO `cart`(, name, price, image, quantity) VALUES(, '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
   $message[] = 'product added to cart!';
}

};

if(isset($_POST['update_cart'])){
$update_quantity = $_POST['cart_quantity'];
$update_id = $_POST['cart_id'];
mysqli_query($con, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
$message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
$remove_id = $_GET['remove'];
mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
header('location:index.php');
}

if(isset($_GET['delete_all'])){
mysqli_query($con, "DELETE FROM `cart` WHERE ") or die('query failed');
header('location:index.php');
}
?>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>shopping cart</title>

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
foreach($message as $message){
   echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
}
}
?>