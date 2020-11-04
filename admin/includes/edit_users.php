 <?php

 if (isset($_GET['edit_user'])) {
  // edit_user key gets from view_all_users.php file at edit (users.php?source=edit_users&edit_user =edit_user is a key word we set)
    $update_users = $_GET['edit_user'];
 }
  $query = "SELECT * FROM users WHERE user_id = $update_users";
  $result = mysqli_query($conn,$query);
  if (!$result) {
     die("QUERY FAIL!".mysql_error($conn));

     }
     // checked connection and while loop is seperated

       while ($row = mysqli_fetch_array($result)) {
       $username = $row['user_name'];
       $Password = $row['user_password'];
       $user_first_name = $row['user_firstname'];
       $user_last_name = $row['user_lastname'];
       $user_email = $row['user_email'];
       $user_role = $row['user_role'];

  }
 if(isset($_POST['submit'])){
     $fname = $_POST['fname'];
     $fname= mysqli_real_escape_string($conn,$fname);
     $lname = $_POST['lname'];
     $user_role = $_POST['user_role'];
     $user_role = mysqli_real_escape_string($conn,$user_role);
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     if (!$password) {
        echo "<div class='alert alert-danger' role='alert'>
        អ្នកត្រូវប្រាដកថា អ្នកបានបំពេញលេខសំងាត់របស់រួចរួលហើយ។ សូមធ្វើការបំពេញលេខសំងាត់របស់អ្នក!<i class='fas fa-sad-tear'></i>
        </div>";
     }else {
     // select from randsalt culumns to encrypt
     // $query = "SELECT randsalt FROM users";
     // $select_randsal = mysqli_query($conn,$query);
     //    if (!$select_randsal) {
     //    die("Query FAIL!". mysqli_error($conn));
     if (!empty($Password)) {
       // $query="UPDATE users SET user_password = '{$hash_password}' WHERE user_id= '{$update_users}'";
       // $sent_query = mysqli_query($conn,$query);
        $query="SELECT user_password FROM users WHERE user_id = $update_users";
        $sent_query = mysqli_query($conn,$query);
        confirmQuery($sent_query);
        $row = mysqli_fetch_array($sent_query);
        $db_user_password = $row['user_password'];

     }

     if ($db_user_password != $password) {
       $hash_password =password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
        }
//      $post_image = $_FILES['image']['name'];
//      $post_image_temp = $_FILES['image']['tmp_name'];

//      $tags = $_POST['t'];
//      $post_conten = $_POST['pc'];
//      $post_conten = mysqli_real_escape_string($conn,$post_conten);
//      $post_date = date('d-m-y');
//     $post_comment_count = 4;
//      move_uploaded_file($post_image_temp, "../images/$post_image");
      $query = "UPDATE users SET user_firstname = '{$fname}', user_lastname = '{$lname}',user_role ='{$user_role}',user_name = '{$username}', user_email = '{$email}',user_password ='{$hash_password}' WHERE user_id = '{$update_users}' ";
      $edit_users = mysqli_query($conn,$query);
      confirmQuery($edit_users);
      echo "<div class='alert alert-success' role='alert'>
      អ្នកបានធ្វើការកែប្រែ ព័ត៍មានរបស់រួចរួលហើយ។ សូមធ្វើការចង់ចាំនូវលេខសំងាត់របស់អ្នក!
      ". "<a href='users.php'>ចូលទៅកាន់អ្នកប្រើប្រាស់ <i class='fas fa-arrow-circle-right'></i></a></div>";

}
}
      // not use while because it just take one result
      // $row = mysqli_fetch_array($select_randsal);
      // $randsalt = $row['randsalt'];
      // // prevent password by crypt password
      // $hash_password = crypt($password,$randsalt);



?>

 <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" name="fname"  value="<?php echo $user_first_name; ?>" class="form-control" id="exampleFormControlInput1"  placeholder="Your first name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Last Name</label>
    <input type="text" name="lname" value="<?php echo $user_last_name; ?>" class="form-control" id="exampleFormControlInput1" placeholder="your last name">
  </div>

  <div class="form-group">
   <label for="exampleFormControlSelect1">User type</label>
    <select name="user_role" class="form-control" id="exampleFormControlSelect1">

      <option value="<?php echo $user_role;?>" id=""><?php echo $user_role;?></option>
        <?php
        if ($user_role == 'administrator') {
          echo "<option value='student'>Subscribe</option>";
        }else{
            echo "<option value='administrator'> Administrator</option>";
            echo "<option value='student'>Student</option>";
        }
        ?>
      </select>
  </div>
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
     <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
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

 <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
  </div>
</form>
