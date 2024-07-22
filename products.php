<?php
@include '../config.php';
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../main_site/main.css">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="../menu.js"></script>
  </head>
  <body>
    
    
       <!-- header -->
    <header class = "header">
      <div class = "head-top">
        <img src = "../images/maklogo.jpeg" class = "brand-name">
        <nav id="scrolling-navbars">
        
        <ul id="ul">  
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="#courses">About us</a></li>
          <li><a href="#teacher">Products</a></li>
          <li><a href="#gallery">Contact Us</a></li>
       </ul>
      <label id="icon1">
        <i class="fa fa-bars"></i>
      </label>
      </nav>
      </div>
      </header>

      <div class = "trend-grid">
          <!-- item -->
          <?php
            $select_query="Select* from `products`";
            $result_query=mysqli_query($conn,$select_query);
            //$row=mysqli_fetch_assoc($result_query);
            //echo $row['name'];
            while ($row=mysqli_fetch_assoc($result_query)) {
            $product_id=$row['id'];
            $product_name=$row['name'];
            $product_price=$row['price'];
            $product_image=$row['image'];
            $product_category=$row['category'];
            $product_weight=$row['weight'];
            $product_zomato=$row['zomato'];
            $product_swiggy=$row['swiggy'];
            $product_description=$row['description'];
            echo "<div class = 'trend-item'>
            <img src = '../../php_admin_crud/images/$product_image' alt = 'best product'>
            <div class = 'trend-item-content'>
              <h4>$product_name</h4>
              <h4>$product_price &#8377</h4>
              
              <span class = 'chevron-icon'>
                <a href='single_product.php?product_id=$product_id'<i class = 'fas fa-chevron-right'></i></a>
              </span>
            </div>
          </div>";}
?>     
</div>


<!-- footer -->
<footer class = "footer container">
      <div class = "footer-item">
        <h2 class = "brand-name">
          Mak <span>Kitchen</span>
        </h2>
        <p>social media accounts</p>
        <ul class = "footer-icons">
        <li>
            <a href = "#"><i class = "iconify iconify-icon" data-icon="ei:sc-facebook"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "iconify iconify-icon" data-icon="bi:twitter"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "iconify iconify-icon" data-icon="bxl:instagram"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "iconify iconify-icon" data-icon="ant-design:linkedin-outlined"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "iconify iconify-icon" data-icon="ant-design:youtube-outlined"></i></a>
          </li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>links</h3>
        <ul>
          <li><a href = "#">home</a></li>
          <li><a href = "#">download</a></li>
          <li><a href = "#">pricing</a></li>
          <li><a href = "#">about</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>products</h3>
        <ul>
          <li><a href = "#">Cheese</a></li>
          <li><a href = "#">Bread</a></li>
          <li><a href = "#">Dips</a></li>
          <li><a href = "#">Butter</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>support</h3>
        <ul>
          <li><a href = "#">FAQ</a></li>
          <li><a href = "#">how it works</a></li>
          <li><a href = "#">features</a></li>
          <li><a href = "#">contact</a></li>
        </ul>
      </div>
    </footer>
    <!-- end of footer -->

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>