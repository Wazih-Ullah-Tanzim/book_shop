<?php

@include 'config.php';

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `approved` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:approved.php');
      $message[] = 'Product has been deleted';
   }else{
      header('location:approved.php');
      $message[] = 'Product could not be deleted';
   };
};

if(isset($_POST['update_order'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_cus_id = $_POST['update_p_cus_id'];
    $update_p_pid= $_POST['update_p_pid'];
    $update_p_name = $_POST['update_p_name'];

    $update_p_number = $_POST['update_p_number'];
    $update_p_email = $_POST['update_p_email'];
    $update_p_method= $_POST['update_p_method'];
    $update_p_flat = $_POST['update_p_flat'];
    $update_p_street = $_POST['update_p_street'];

    $update_p_city = $_POST['update_p_city'];
    $update_p_state = $_POST['update_p_state'];
    $update_p_country = $_POST['update_p_country'];
    $update_p_pin_code = $_POST['update_p_pin_code'];
    $update_p_total_products = $_POST['update_p_total_products'];
    $update_p_total_price = $_POST['update_p_total_price'];
    $update_p_status = $_POST['update_p_status'];
    $update_p_date = $_POST['update_p_date'];

   $update_query = mysqli_query($conn, "UPDATE `approved` SET pid='$update_p_pid', name = '$update_p_name', number='$update_p_number',email='$update_p_email',method='$update_p_method',flat='$update_p_flat',street='$update_p_street',city='$update_p_city',state='$update_p_state',country='$update_p_country',pin_code='$update_p_pin_code',total_products='$update_p_total_products',total_price='$update_p_total_price',status='$update_p_status',date='$update_p_date'  WHERE id = '$update_p_id'");

   if($update_query){
   
      $message[] = 'product updated succesfully';
      header('location:approved.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:approved.php');
   }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->


   <link rel="stylesheet" href="css/order_style.css">

</head>
<body>

   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">


<section class="display-product-table">

   <table>

      <thead>
         <th>APPROVED ID</th>
         <th>CUS_ID</th>
         <th>PRO_ID</th>
         <th>NAME</th>
         <th>NUMBER</th>
         <th>EMAIL</th>
         <th>METHOD</th>
         <th>FLAT</th>
         <th>STREET</th>
         <th>CITY</th>
         <th>STATE</th>
         <th>COUNTRY</th>
         <th>PIN CODE</th>
         <th>TOTAL PRODUCTS</th>
         <th>TOTAL PRICE</th>
         <th>STATUS</th>
         <th>DATE</th>
      </thead>

      <tbody>
         <?php
         
            $select_order = mysqli_query($conn, "SELECT * FROM `approved`");
            if(mysqli_num_rows($select_order) > 0){
               while($row = mysqli_fetch_assoc($select_order)){
         ?>

         <tr>
            <!-- <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td> -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['cus_id']; ?></td>
            <td><?php echo $row['pid']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['method']; ?></td>
            <td><?php echo $row['flat']; ?></td>
            <td><?php echo $row['street']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['pin_code']; ?></td>
            <td><?php echo $row['total_products']; ?></td>
            <td>$<?php echo $row['total_price']; ?>/-</td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
               <a href="approved.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Delete this order?');"> <i class="fas fa-trash"></i> Cancel </a>
               <a href="approved.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> Update </a>
              
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>No product updated</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `approved` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>
 
   

   <form action="" method="post" enctype="multipart/form-data">

 

      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="hidden" name="update_p_cus_id" value="<?php echo $fetch_edit['cus_id']; ?>">

      <input type="text" class="box" placeholder="Enter PID"  required name="update_p_pid" value="<?php echo $fetch_edit['pid']; ?>">
      <input type="text" class="box" placeholder="Enter name"  required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" class="box" placeholder="Enter number"  required name="update_p_number" value="<?php echo $fetch_edit['number']; ?>">
      <input type="text" class="box" placeholder="Enter email"  required name="update_p_email" value="<?php echo $fetch_edit['email']; ?>">
      <input type="text" class="box" placeholder="Enter method"  required name="update_p_method" value="<?php echo $fetch_edit['method']; ?>">
      <input type="number" class="box" placeholder="Enter flat"  required name="update_p_flat" value="<?php echo $fetch_edit['flat']; ?>">
      <input type="text" class="box" placeholder="Enter street"  required name="update_p_street" value="<?php echo $fetch_edit['street']; ?>">
      <input type="text" class="box" placeholder="Enter city"  required name="update_p_city" value="<?php echo $fetch_edit['city']; ?>">
      <input type="text" class="box" placeholder="Enter state"  required name="update_p_state" value="<?php echo $fetch_edit['state']; ?>">
      <input type="text" class="box" placeholder="Enter country"  required name="update_p_country" value="<?php echo $fetch_edit['country']; ?>">
      <input type="number" class="box" placeholder="Enter pin code"  required name="update_p_pin_code" value="<?php echo $fetch_edit['pin_code']; ?>">
      <input type="text" class="box" placeholder="Enter total products"  required name="update_p_total_products" value="<?php echo $fetch_edit['total_products']; ?>">      
      <input type="number" min="0" placeholder="Enter total price"     class="box" required name="update_p_total_price" value="<?php echo $fetch_edit['total_price']; ?>">
      <input type="text" class="box" placeholder="Enter status" name="update_p_status" value="<?php echo $fetch_edit['status']; ?>">
      <input type="date" class="box" placeholder="Enter date" name="update_p_date" value="<?php echo $fetch_edit['date']; ?>">



      <input type="submit" value="update the order" name="update_order" class="btn">


      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>




<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>