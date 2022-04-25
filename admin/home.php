<?php
session_start();
if($_SESSION['user_id']){
 $p= $_SESSION['user_id'];

echo "<h1 style='color:#008000; text-align:center;'>"."Welcome Dear  ".$p."</h1>";
}
else{
    header("location:../login.php");
}


?>
<!-- <button > <a href="../logout.php" >log Out</a>  </button> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ADMIN</title>
  <link rel="stylesheet" href="style_3.css">
</head>

<body>

  <div class="main">
    <div class="navbar">
      <div class="icon">
        <h3 class="logo">GOE</h3>
      </div>

      <div class="menu">

        <ul>
          <li><a href="admin.php">MANAGE</a></li>
          <li><a href="#">SERVICE</a></li>
          <li><a href="#">DESIGN</a></li>
          <li><a href="#">CONTACT</a></li> 
           


        </ul>
      </div>

    


    </div>
    <div class="content">
      <h3>Garden of <span>Eden (ADMIN PANEL) </span> <br></h3>
      <p class="par">Books Express The Improvement Of The Human Mind.
        The Importance Of Books In Arranging Human Life Is Immense.
        We Offer You The Best Quality Books At The Lowest Prices.
        Let Us Read Books And Play A Role In Shaping The Country.
        In Every District Of Bangladesh, At The Fastest Time,
        Books Are Delivered.</p>
        <br><br>
        <table>

      <tr>
        <td>
            <button class="cn"><a href="#">JOIN US</a></button>
        </td>
        <td>
        <div class="search">
        <input class="srch" type="search" name="" placeholder="search">
        <a href="#"> <button class="btn">Search</button></a>
        </td>
      </tr>
        
        
      </table>
      <div class="form">
        
      


        <button class="btnn"><a href="../logout.php">LOG OUT</a> </button>

      </div>
      
      </div>
    </div>
  </div>
  </div>
  </div>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>