 <?php
 if(isset($_POST['submit'])){
     $fname = $_POST['fname'];
     $fname= mysqli_real_escape_string($conn,$fname);
     $lname = $_POST['lname'];
     $lname= mysqli_real_escape_string($conn,$lname);

     $user_role = $_POST['user_role'];
     $user_role= mysqli_real_escape_string($conn,$user_role);
     $username = $_POST['username'];
     $username= mysqli_real_escape_string($conn,$username);
//     $post_image = $_FILES['image']['name'];
//     $post_image_temp = $_FILES['image']['tmp_name'];
//
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password = mysqli_real_escape_string($conn,$password);
     // password_hash is used to encrypt password
     $password =password_hash($password,PASSWORD_BCRYPT,array('cost' => 12));
     $user_date = date('d-m-y');
//     $post_comment_count = 4;
  //   move_uploaded_file($post_image_temp, "../images/$post_image");

     $query = "INSERT INTO users(user_name,user_password,user_firstname,user_lastname,user_email,user_role)";
      $query .="VALUES ('{$username}','{$password}','{$fname}','{$lname}','{$email}','{$user_role}')";
     $create_users_query = mysqli_query($conn, $query);
     confirmQuery($create_users_query);
     // header("Location: users.php");
     echo "A new user was created:". "     ". "<a href='users.php'>View uses</a>";
 }

?>




 <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="Your first name">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="your last name">
  </div>

  <div class="form-group">
   <label for="exampleFormControlSelect1">User type</label>
    <select name="user_role" class="form-control" id="exampleFormControlSelect1">

    <option value="subscribe">Select options</option>
    <option value="administrator">Administrator</option>
    <option value="student">Student</option>
    <option value="subscribe">Subscribe</option>


      </select>
  </div>




  <div class="form-group">
    <label for="exampleFormControlSelect1">Username</label>
     <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Your username">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email</label>
     <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Password</label>
     <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
  </div>


 <button type="submit" name="submit" class="btn btn-primary">Add user</button>
  </div>
</form>
