<?php include('includes/header.php'); ?>


 <?php
  if (isset($_SESSION['username'])) {
     $username = $_SESSION['username'];
      # code...
  }
  $query ="SELECT * FROM users WHERE  user_name = '{$username}'";
  $select_users_query = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($select_users_query)) {

       $username = $row['user_name'];
        $Password = $row['user_password'];
        $user_first_name = $row['user_firstname'];
        $user_last_name = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];
  }


  ?>
  <?php

 if(isset($_POST['submit'])){
     $fname = $_POST['fname'];
     $fname= mysqli_real_escape_string($conn,$fname);
     $lname = $_POST['lname'];
     $user_role = $_POST['user_role'];
     $user_role = mysqli_real_escape_string($conn,$user_role);
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];

//      $post_image = $_FILES['image']['name'];
//      $post_image_temp = $_FILES['image']['tmp_name'];

//      $tags = $_POST['t'];
//      $post_conten = $_POST['pc'];
//      $post_conten = mysqli_real_escape_string($conn,$post_conten);
//      $post_date = date('d-m-y');
// //     $post_comment_count = 4;
//      move_uploaded_file($post_image_temp, "../images/$post_image");
      if ($Password != $password ) {
          $Password = password_hash($password ,PASSWORD_BCRYPT,array('cost'=>12));
      }

     $query = "UPDATE users SET user_firstname = '{$fname}', user_lastname = '{$lname}',user_role ='{$user_role}',user_name = '{$username}', user_email = '{$email}',user_password ='{$Password}' WHERE user_name = '{$username}' ";
     $edit_users = mysqli_query($conn, $query);
     confirmQuery($edit_users);
     header("Location: users.php");

 }



  ?>

    <div id="wrapper">
        <!-- Navigation -->
       <?php include('includes/navegation.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Mr
                            <small class="text-danger font-weight-bold"> <?php echo $_SESSION['username'] ?>
                            </small>
                        </h1>

                    </div>
                    <div class="col-sm-6">
                        <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" name="fname"  value="<?php echo $user_first_name; ?>" class="form-control" id="exampleFormControlInput1"  placeholder="Your first name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Last Name</label>
    <input type="text" name="lname" value="<?php echo $user_last_name; ?>" class="form-control" id="exampleFormControlInput1" placeholder="your last name">
  </div>

  <!-- <div class="form-group">
   <label for="exampleFormControlSelect1">User type</label>
    <select name="user_role" class="form-control" id="exampleFormControlSelect1">

      <option value="subscribe" id=""><?php //echo $user_role;?></option>


        <?php

      //  if ($user_role == 'administrator') {

          //echo "<option  value='subscribe'>subscribe</option>";

        //}// else{

          //echo "<option value='administrator'> administrator</option>";
        //}

        //?>



      </select>
  </div> -->




  <div class="form-group">
    <label for="exampleFormControlSelect1">Username</label>
     <input type="text" name="username" value="<?php echo $username; // $username get from above ?>" class="form-control" id="exampleFormControlInput1" placeholder="Your username">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email</label>
     <input type="text" name="email" value="<?php echo $user_email; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Password</label>
     <input  autocomplete="off" type="password" name="password"  class="form-control" id="exampleFormControlInput1" placeholder="Password">
  </div>
<!--
   <div class="form-group">
    <label for="exampleFormControlSelect1">C</label>
     <input type="text" name="t" class="form-control" id="exampleFormControlInput1" placeholder="key words">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Conten</label>
    <textarea  name="pc"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <div class="form-group">
-->

 <button type="submit" name="submit" class="btn btn-primary">UPDATE PROFILE</button>
  </div>
</form>

                    </div>
                    <div class="col-sm-6">


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <?php include('includes/footer.php'); ?>
