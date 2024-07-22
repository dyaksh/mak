<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="scripts.js">
</head>
<body>
   <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Dashboard
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
         
            <li class="sidebar-list-item">
            <a href="admin_page.php" >
              <span class="material-icons-outlined">inventory_2</span> Add Product
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="manage_table.php" target="_self">
              <span class="material-icons-outlined">inventory_2</span> Manage product
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="admin_category.php" target="_self">
              <span class="material-icons-outlined">inventory_2</span> Add Category product
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="manage_category_table.php" target="_self">
              <span class="material-icons-outlined">inventory_2</span> Manage Category product
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="manage_contact_table.php" target="_self">
              <span class="material-icons-outlined">inventory_2</span> Manage Contact
            </a>
          </li>


        </ul>
      </aside>
      <!-- End Sidebar -->


<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_category = $_POST['product_category'];
   $product_weight = $_POST['product_weight'];
   $product_url1 = $_POST['product_url1'];
   $product_url2 = $_POST['product_url2'];
   $product_description = $_POST['product_description'];


   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET name='$product_name', price='$product_price', category='$product_category', weight='$product_weight', zomato='$product_url1', swiggy='$product_url2', description='$product_description', image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'Update the product successfully';
         /*header('location:admin_page.php');*/
         
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<?php

   if(isset($_GET['edit'])){
      $edit_id=$_GET['edit'];
      // echo $edit_id;
      $get_data="Select * from `products` where id=$edit_id";
      $result=mysqli_query($conn,$get_data); 
      $row=mysqli_fetch_assoc($result);
      $product_name=$row['name'];
      // echo $product_name;
      $product_price=$row['price'];
      $product_category=$row['category'];
      $product_weight=$row['weight'];
      $product_category=$row['category'];
      $product_url1=$row['zomato'];
      $product_url2=$row['swiggy'];
      $product_description=$row['description'];
      $product_image=$row['image'];
}
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>-->

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   <?php
$query = "SELECT c_name,id FROM c_products";
$select1 = mysqli_query($conn,$query)

?>
   
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php $row['name']; echo $product_name ?>" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="<?php $row['price']; echo $product_price ?>" placeholder="enter the product price">
      <select id="slctitem"  name="product_category"  class="box">
            <option>Select Category</option>
         <?php while($row1 = mysqli_fetch_assoc($select1)){ 
            ?>
            <option value = <?php echo $row1['id']; ?>><?php echo $row1['c_name']; ?></option>
         <?php } ?>
         </select>
      <input type="text" class="box" name="product_weight" value="<?php $row['weight']; echo $product_weight ?>" placeholder="Enter the Product weight">
      <input type="url" class="box" name="product_url1" value="<?php $row['zomato']; echo $product_url1 ?>" placeholder="Enter the zomato url">
      <input type="url" class="box" name="product_url2" value="<?php $row['swiggy']; echo $product_url2?>" placeholder="Enter the swiggy url">
      <input type="text" class="box" name="product_description" value="<?php $row['description']; echo $product_description ?>" placeholder="Enter the Product description">



      <input type="file" class="box" name="product_image"   accept="image/png, image/jpeg, image/jpg"value="<?php echo $product_image ?>" >
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">go back!</a>
   </form>

   
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>