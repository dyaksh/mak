<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">   

   <!-- custom css file link  -->
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

   $category_name = $_POST['category_name'];
   $category_description = $_POST['category_description'];
   

   
   if(empty($category_name) || empty($category_description)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE c_products SET c_name='$category_name', c_description='$category_description' WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload == 1){
         $message[] = 'Update the category product successfully';
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
      $get_data="Select * from `c_products` where id=$edit_id";
      $result=mysqli_query($conn,$get_data); 
      $row=mysqli_fetch_assoc($result);
      $category_name=$row['c_name'];
      // echo $product_name;
      $category_description=$row['c_description'];
}
?>

<script>
   if( window.history.replaceState )
   {
      window.history.replaceState( null, null, window.location.href );
   }
</script>


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
      
      $select = mysqli_query($conn, "SELECT * FROM c_products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="category_name" value="<?php $row['c_name']; echo $category_name ?>" placeholder="enter the category name">
      <input type="text" min="0" class="box" name="category_description" value="<?php $row['c_description']; echo $category_description ?>" placeholder="enter the product description">
      
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_category.php" class="btn">go back!</a>
   </form>

   <?php }; ?>

   

</div>

</div>

</body>
</html>