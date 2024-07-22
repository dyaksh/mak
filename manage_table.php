   <?php

   @include 'config.php';
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

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

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


   <?php
   $get_query = "SELECT p.id,p.name,p.price,p.zomato,p.swiggy, "
               . "p.image,p.weight,p.description,cp.c_name AS category "
               . "FROM products p "
               . "left join c_products cp ON cp.id = p.category";
   $select = mysqli_query($conn, $get_query);
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Sr. No</th>
            <th>product image</th>
            <th>Category</th>
            <th>weight</th>
            <th>product name</th>
            <th>product price</th>
            <th>zomato link</th>
            <th>swiggy link</th>
            <th>Description</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>&#8377;<?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['zomato']; ?></td>
            <td><?php echo $row['swiggy']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>