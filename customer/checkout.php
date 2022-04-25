<?php
session_start();
if($_SESSION['user_id']){
   $p= $_SESSION['user_id'];




}
else{
    header("location:../login.php");
}


?>


<?php
    
               


@include 'config.php';

if(isset($_POST['order_btn'])){

   
   $pid = $_POST['pid'];
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE cus_id='$p' ");
   // $pid= mysqli_query($conn, "SELECT pid FROM `cart` WHERE cus_id='$p' ");
  
    $product_name[]=null;
   $product_pid[]=null;

   if(mysqli_num_rows($cart_query) > 0){

      while($product_item = mysqli_fetch_assoc($cart_query)){

         $product_pid[] = $product_item['pid'];
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
      // total pric
       

          include("../connection.php");
         $cusid=$_SESSION['user_id'];
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE cus_id='$p' ");
         $grand_total = 0;
         if (mysqli_num_rows($select_cart) > 0) {
             while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                
              
        
             $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
         
   
         
            $grand_total += ((int)$fetch_cart['quantity'] * (int)$fetch_cart['price']);
           
             };
         };
         



         
        
      };
   };
// 
   $total_product = implode(', ',$product_name);
   $pid=implode(', ',$product_pid);
   
 
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(cus_id,pid,name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$p','$pid','$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$grand_total')") or die('query failed');
  
   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> Your name : <span>".$name."</span> </p>
            <p> Your number : <span>".$number."</span> </p>
            <p> Your email : <span>".$email."</span> </p>
            <p> Your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> Your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";

   }

   mysqli_query($conn, "DELETE FROM `cart`  WHERE cus_id='$p' ");
   header('location:cart.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE cus_id='$p' ");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){

            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);

            // $grand_total = $total += $total_price;
            $grand_total += ((int)$fetch_cart['quantity'] * (int)$fetch_cart['price']);
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> Grand total : $<?= $grand_total; ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="Enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>

         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>Cash on delivery</option>
               <option value="credit card">Credit card</option>
               <option value="BKASH">Bkash</option>
               <option value="Rocket">Rocket</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Flat No</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
         </div>
         <div class="inputBox">
            <span>Street Name</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
   

          <div class="inputBox">
            <span>city</span>
            <select name="city">
               <option value="Chittagong" selected>Chittagong</option>
               <option value="Dhaka">Dhaka</option>
               <option value="Comilla">Comilla</option>
               <option value="Rajshahi">Rajshahi</option>
               <option value="Barisal">Barisal</option>
               <option value="Abroad">Abroad</option>
            </select>
         </div>

         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. West" name="state" required>
         </div>
      
         <div class="inputBox">
            <span>country</span>
            <select name="country">
               <option value="Bangladesh" selected>Bangladesh</option>
               <option value="Soudi Arabia" selected>Soudi Arabia</option>
               <option value="India" selected>India</option>
               <option value="Canada" selected>Canada</option>
               <option value="Abroad" selected>Abroad</option>
               
            </select>
         </div>



         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 4212" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>