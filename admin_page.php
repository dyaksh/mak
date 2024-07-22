<?php 
@include 'login_system/controllerUserData.php'; 
?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

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
        
        
          <!--<span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>-->
          
          <button type="button" class="logout"><a href="login_system/logout-user.php">Logout</a></button>

          <div class="header-right">
          <span class="material-icons-outlined">account_circle</span>
          <?php echo $fetch_info['name'] ?>
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
@include 'manage_category_table';

if(isset($_POST['add_product'])){

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
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, price, category, weight, zomato, swiggy, description, image) VALUES('$product_name', '$product_price', '$product_category', '$product_weight', '$product_url1', '$product_url2', '$product_description', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
};

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
   <title>admin page</title>

    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
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

<?php
$query = "SELECT c_name,id FROM c_products";
$select1 = mysqli_query($conn,$query)

?>


   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="number" placeholder="enter product price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <select id="slctitem"  name="product_category"  class="box">
            <option>Select Category</option>
         <?php while($row1 = mysqli_fetch_assoc($select1)){ 
            ?>
            <option value = <?php echo $row1['id']; ?>><?php echo $row1['c_name']; ?></option>
         <?php } ?>
         </select>
         <input type="text" placeholder="enter product weight" name="product_weight" class="box">
         <input type="url" placeholder="enter product zomato url" name="product_url1" class="box">
         <input type="url" placeholder="enter product swiggy url" name="product_url2" class="box">
         <input type="text"  placeholder="Description" name="product_description" rows="4" cols="50" class="box">

         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

<script> 
   let item = [];
   item.sort();

   item.forEach(function(item){
      let o=document.createElement("option");
      o.text = item;
      o.value = item;
      slctitem.appendChild(o);
   });
</script>


</body>
</html>