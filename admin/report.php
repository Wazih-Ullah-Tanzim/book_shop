<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/order_style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">

  <form action="" method="POST" class="add-product-form">
        
        <input type="date" class="box" id="startdate" name="startdate">
       <h3> to </h3>
        <input type="date" class="box" id="enddate" name="enddate">
      
        <input type="submit" class="btn" name="searchsubmit" value="Search">
     
    </div>
     </form>
    


      <?php

 if(isset($_REQUEST['searchsubmit'])){
    $startdate = $_REQUEST['startdate'];
    $enddate = $_REQUEST['enddate'];
    $sql = "SELECT * FROM `approved` WHERE `date`  BETWEEN '$startdate' AND '$enddate'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
     echo '
     <div class="container">
     <section class="display-product-table">

  <p class="heading" >Details</p>

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
         <th>Date</th>
      </thead>

     <tbody>';
  while($row = $result->fetch_assoc()){
    echo '<tr>

    <th scope="row">'.$row["id"].'</th>
    <td>'.$row["cus_id"].'</td>
    <td>'.$row["pid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["number"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["method"].'</td>
    <td>'.$row["flat"].'</td>
    <td>'.$row["street"].'</td>
    <td>'.$row["city"].'</td>
    <td>'.$row["state"].'</td>
    <td>'.$row["country"].'</td>
    <td>'.$row["pin_code"].'</td>
    <td>'.$row["total_products"].'</td>
    <td>'.$row["total_price"].'</td>
    <td>'.$row["status"].'</td>
    <td>'.$row["date"].'</td>
      </tr>';

    }
    echo '<tr>
    <td><form class="d-print-none" ><input class="btn" type="submit" value="Print" onClick="window.print()"></form></td>
  </tr>
  </tbody>
  </table>
  </section>';
  } else {
    echo "<div class='' role='alert'> No Records Found ! </div>";
  }
 }
  ?>    
    
</div>




<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
