<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_pid = $_POST['p_pid'];
   $p_bp = $_POST['p_bp'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   
   $p_image_folder = 'uploaded_img/'.$p_image;

   $p_image_folder = '../customer/uploaded_img/'.$p_image;


   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name,pid,bp,price, image) VALUES('$p_name', '$p_pid','$p_bp', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      
      $message[] = 'Product add succesfully';
   }else{
      $message[] = 'Could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'Product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'Product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_pid = $_POST['update_p_pid'];
   $update_p_bp = $_POST['update_p_bp'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name',pid = '$update_p_pid',bp = '$update_p_bp', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
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
   <link rel="stylesheet" href="css/style.css">

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

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Add a new product</h3>
   <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
   <input type="text" name="p_pid" placeholder="Enter the product ID" class="box" required>
   <input type="text" name="p_bp" placeholder="Enter the buying price" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="Enter the product Selling price" class="box" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>Product Image</th>
         <th>Product Name</th>
         <th>Product ID</th>
         <th>Product Buying price</th>
         <th>Product Selling price</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['pid']; ?></td>
            <td>$<?php echo $row['bp']; ?> /-</td>
            <td>$<?php echo $row['price']; ?> /-</td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are your sure you want to delete this?');"> <i class="fas fa-trash"></i> Delete </a>
               <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>No product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">

      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">

      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="text" class="box" required name="update_p_pid" value="<?php echo $fetch_edit['pid']; ?>">
      <input type="text" class="box" required name="update_p_bp" value="<?php echo $fetch_edit['bp']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the product" name="update_product" class="btn">
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