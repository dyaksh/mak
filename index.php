<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sashi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../main_site/main.css">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="../menu.js">
    </script>
  </head>
  <body>
    
    
       <!-- header -->
    <header class = "header">
      <div class = "head-top">
        <img src = "../images/maklogo.jpeg" class = "brand-name">
        <nav id="scrolling-navbars">
        
        <ul id="ul">  
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#heading">About us</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="#footer container">Contact Us</a></li>
       </ul>
      <label id="icon1">
        <i class="fa fa-bars"></i>
      </label>
      </nav>
      </div>

      <div class = "head-body container">
        <div class = "head-body-content">
          <h1 class = "head-title">
            welcome to MAK Kitchen
          </h1>
          <p class = "text">
            Indulge in the artistry of baking with our Artisan Sourdough Loaf. Each golden-brown masterpiece is lovingly handcrafted, using a time-honored recipe that dates back generations. Whether enjoyed as a solo treat or paired with our finest wines, this cheese takes your taste buds on an exquisite journey.
          </p>
        </div>

        <div class = "head-body-img">
          <img src = "../images/img1.png" alt = "header image">
        </div>
      </div>
    </header>
    <script>
      document.getElementById("ul").childNodes.forEach((item)=>{
item.childNodes.forEach((item1)=>{
  item1.addEventListener("click",()=>{
    document.getElementById("ul").classList.toggle("show")
  })
})
})
    </script>
    <!-- end of header -->

<!--About us -->

<div class="heading" id="heading">
  <h1>About Us</h1>
  <p>Qui voluptas error aut consequatur Quis ut reiciendis dolorem 33 consequatur accusantium qui temporibus error qui quod autem sit soluta perferendis.
    Sed aliquam alias et commodi fuga sit explicabo impedit et libero quas ea cumque nobis sed sint nisi qui sequi sunt. 
    </p>
</div>
<div class="container2">
  <section class="about">
    <div class="about-image">
      <img src="../images/maklogo.jpeg">
    </div>
    <div class="about-content">
      <h2>Ut corrupti sint qui pariatur deleniti et sapiente Quis</h2>
      <p>Qui voluptas error aut consequatur Quis ut reiciendis dolorem 33 consequatur accusantium qui temporibus error qui quod autem sit soluta perferendis.
    Sed aliquam alias et commodi fuga sit explicabo impedit et libero quas ea cumque nobis sed sint nisi qui sequi sunt. 
    Et dolores dicta est eaque voluptates et repellat maxime eos veritatis dolorem et totam minima est rerum reprehenderit id explicabo quas. 
    Id natus aspernatur sit reiciendis alias hic fugiat doloribus et mollitia asperiores et praesentium vero. 
    Non vitae quidem vel nobis iure a modi voluptatem ad facere asperiores nam maxime voluptatem. 
    Et consequuntur earum et explicabo pariatur aut veniam alias et doloremque tempore et laborum natus 33 iusto repellendus. 
    Et obcaecati veniam aut debitis quae quo veniam cumque ea fugiat quam eum fugit earum ab quaerat rerum in tempora possimus. 
    Et itaque voluptas qui quia iste et animi voluptate est impedit dolore est voluptate sapiente.</p>
    
</div>
  </section>
</div>
  






    <!-- trending product -->
    <section class = "trend" id="trend">
      <div class = "container">
        <div class = "title">
          <h4>trending now</h4>
          <h2>best selling product</h2>
        </div>

        <div class = "trend-grid">
          <!-- item -->
          <div class = "trend-item">
            <img src = "../images/img2.png" alt = "best product">
            <div class = "trend-item-content">
              <h4> Delicious Cheese</h4>
              <h4>60.00</h4>
              <!--<div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>-->
              <span class = "chevron-icon">
                <i class = "fas fa-chevron-right"></i>
              </span>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "../images/img1.png" alt = "best product">
            <div class = "trend-item-content">
              <h4>Comfort Bread</h4>
              <h4>80.00</h4>
              <!--<div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>-->
              <span class = "chevron-icon">
                <i class = "fas fa-chevron-right"></i>
              </span>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "../images/img3.png" alt = "best product">
            <div class = "trend-item-content">
              <h4>Mixed Dips</h4>
              <h4>30.00</h4>
              <!--<div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>-->
              <span class = "chevron-icon">
                <i class = "fas fa-chevron-right"></i>
              </span>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of trending product -->

    <div class = "underline"></div>

    <?php

@include '../config.php';

if(isset($_POST['add_product'])){

  //echo "<pre>";print_r($_POST);
  
     $contact_fullname = $_POST['contact_fullname'];
     $contact_email = $_POST['contact_email'];
     $contact_memo = $_POST['contact_memo'];
  
     if(empty($contact_fullname) || empty($contact_email) || empty($contact_memo)){
        $message[] = 'please fill out all';
     }else{
        $insert = "INSERT INTO contact(FullName, Email, memo) VALUES('$contact_fullname', '$contact_email', '$contact_memo')";
        $upload = mysqli_query($conn,$insert);
        //echo $upload;
         if($upload == 1)
         {
           echo '<script> alert("Your detail has been submiting"); </script>';
         }
         else{
           echo 'could not add the product';
         }
     }
  
  };
  
  if(isset($_GET['delete'])){
     $id = $_GET['delete'];
     mysqli_query($conn, "DELETE FROM c_products WHERE id = $id");
     header('location:admin_category.php');
  };

?>

<script>
   if( window.history.replaceState )
   {
      window.history.replaceState( null, null, window.location.href );
   }

   
</script>

    <!-- featured product -->
    <!--<section class = "featured">
      <div class = "container">-->
        <!-- item -->
        <!--<div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "assets/red-sofa-photo.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>red sofa with pillows</h2>
              <p class = "item-price">$55.00</p>
            </div>
            <p class = "text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>-->
        <!-- end of item -->
        <!-- item -->
        <!--<div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "assets/single-comfort-sofa-chair.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>single comfort sofa chair</h2>
              <p class = "item-price">$42.00</p>
            </div>
            <p class = "text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>-->
        <!-- end of item -->
        <!-- item -->
        <!--<div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "assets/sofa-png-image.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>warm brown sofa</h2>
              <p class = "item-price">$78.00</p>
            </div>
            <p class = "text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>-->
        <!-- end of item -->
        <!-- item -->
        <!--<div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "assets/wide-sofa.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>wide comfortable sofa</h2>
              <p class = "item-price">$90.55</p>
            </div>
            <p class = "text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <button type = "button" class = "btn">Purchase</button>
            </div>
          </div>
        </div>-->
        <!-- end of item -->
      <!--</div>
    </section>-->
    <!-- end of featured product -->

    <!-- blog -->
    <!--<section class = "blog">
      <div class = "container">
        <div class = "title">
          <h4>daily update</h4>
          <h2>latest blog</h2>
        </div>

        <div class = "blog-grid">-->
          <!-- item -->
          <!--<div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "assets/blog-img-1.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">creative ideas for decoration</a>
              <div>
                <span>january 20 | design | furniture</span>
              </div>
            </div>
          </div>-->
          <!-- end of item -->
          <!-- item -->
          <!--<div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "assets/blog-img-2.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">decorate your home with the most modern furnishings.</a>
              <div>
                <span>january 25 | design | furniture</span>
              </div>
            </div>
          </div>-->
          <!-- end of item -->
          <!-- item -->
          <!--<div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "assets/blog-img-3.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">furniture designs & contemporary art</a>
              <div>
                <span>january 28 | design | furniture</span>
              </div>
            </div>
          </div>-->
          <!-- end of item -->
        <!--</div>
      </div>
    </section>-->
    <!-- end of blog -->

    <!-- newsletter -->
    <!--<section class = "newsletter">
      <div class = "container">
        <div class = "newsletter-content">
          <div class = "title">
            <h4>subscribe to our newsletter</h4>
            <h2>Newsletter</h2>
          </div>
          
          <form>
            <div class = "form-group">
              <input type = "email" class = "form-control" placeholder="Enter your email address">
              <button type = "submit" class = "subscribe-btn">
                subscribe
                <i class = "fas fa-chevron-right"></i>
              </button>
            </div>
          </form>

          <div class = "circle-box circle-1"></div>
          <div class = "circle-box circle-2"></div>
        </div>
      </div>
    </section>-->
    <!-- end of newsletter-->

    <!-- footer -->
    <footer class = "footer container" id="footer container">
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

      <div class="container1">
      <p><b>Contact Us</b></p>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    
    <input type="text" id="fname" name="contact_fullname" placeholder="Full name..">

   
    <input type="email" id="lname" name="contact_email" placeholder="Email..">

    
    <textarea id="subject" name="contact_memo" placeholder="Message.." style="height:100px"></textarea>

    <input type="submit" name="add_product" value="Submit">
  </form>
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