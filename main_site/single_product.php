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

    <?php
    // single product function

    function view_details(){
      global $conn;
      if(isset($_GET['product_id'])){
        $product_id=$_GET['product_id'];
          $select_query="Select p.*,cp.c_name from `products` p left join c_products cp on cp.id = p.category where p.id=$product_id";
            $result_query=mysqli_query($conn,$select_query);
            //$row=mysqli_fetch_assoc($result_query);
            //echo $row['name'];
            while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['id'];
            $product_name=$row['name'];
            $product_price=$row['price'];
            $product_image=$row['image'];
            $product_category=$row['c_name'];
            $product_weight=$row['weight'];
            $product_zomato=$row['zomato'];
            $product_swiggy=$row['swiggy'];
            $product_description=$row['description'];
            echo " <section class = 'featured'>
            <div class = 'container'>
            <div class = 'featured-item'>
            <div class = 'featured-item-img'>
              <img src = '../../php_admin_crud/images/$product_image' alt = 'feature image'>
            </div>
            <div class = 'featured-item-content'>
              <div class = 'title'>
                <h4>$product_category</h4>
                <h2>$product_name</h2>
                <p class = 'item-price'>$product_weight</p>
                <p class = 'item-price'>$product_price &#8377</p>
              </div>
              <p class = 'text'>
                $product_description
              </p>
              <div class = 'featured-btns'>
              <a href='$product_zomato' target='_blank'>
                <button type = 'button' class = 'btn'>Zomato</button></a>
                <a href='$product_swiggy' target='_blank'>
                <button type = 'button' class = 'btn'>Swiggy</button></a>
              </div>
            </div>
          </div>
          </div>
          </section>";
        }
 }
  }
    ?>
      
      
        <!-- header -->
      <header class = "header">
        <div class = "head-top">
          <img src = "../images/maklogo.jpeg" class = "brand-name">
          <nav id="scrolling-navbars">
          
          <ul id="ul">  
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#courses">About us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="#gallery">Contact Us</a></li>
        </ul>
        <label id="icon1">
          <i class="fa fa-bars"></i>
        </label>
        </nav>
        </div>
        </header>


        <!-- featured product -->
      <!--<section class = "featured">
        <div class = "container">-->

        
        <!-- item -->
        <!--<div class = 'featured-item'>
        <div class = 'featured-item-img'>
              <img src = '../php_admin_crud/images/$product_image' alt = 'feature image'>
            </div>
            <div class = 'featured-item-content'>
              <div class = 'title'>
                <h4>$product_category</h4>
                <h2>$product_name</h2>
                <p class = 'item-price'>$product_price</p>
              </div>
              <p class = 'text'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
              </p>
              <div class = 'featured-btns'>
                <button type = 'button' class = 'btn'>$product_zomato</button>
                <button type = 'button' class = 'btn'>$product_swiggy</button>
              </div>
            </div>
          </div>-->
       
          
        <!--</div>
      </section>-->
          <!-- end of item -->
          <?php
          view_details(); 
          ?>


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