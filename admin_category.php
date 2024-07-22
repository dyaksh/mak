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
error_reporting(-1);
ini_set("display_errors",1);
@include 'config.php';


if(isset($_POST['add_products'])){

//echo "<pre>";print_r($_POST);

   $category_name = $_POST['category_name'];
   $category_description = $_POST['category_description'];
   

   if(empty($category_name) || empty($category_description)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO c_products(c_name, c_description) VALUES('$category_name', '$category_description')";
      $upload = mysqli_query($conn,$insert);
      //echo $upload;
       if($upload == 1)
       {
         $message[] = 'new product added successfully';
       }
       else{
         $message[] = 'could not add the product';
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


<!--<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

    font awesome cdn link  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    custom css file link  
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="scripts.js">

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

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a category</h3>
         <input type="text" placeholder="enter category name" name="category_name" class="box">
         <input type="text" placeholder="enter category description" name="category_description" class="box">
         <input type="submit" class="btn" name="add_products" value="add product">
      </form>
   </div>
   

</div>

</body>
</html>