
 <?php  include "includes/header.php"; ?>

    <!-- Navigation -->

    <?php  include "includes/navigation.php"; ?>

    <?php

    // main if
     if(isset($_POST['submit'])){
      // trim is function to delete whitespace 
      $username = trim($_POST['username']);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);

      $error =[

        'username' => '',
        'email' => '',
        'password'=> ''
      ];

      if (strlen($username)<4) {
        $error['username'] = 'Username needs more than 4 charactors';
      }

       if ($username  == '') {
        $error['username'] = 'Username can not be empty';
      }


       if (exit_username($username)) {
        $error['username'] = 'Username already exists, pich another';
      }


       if ($email== '') {
           $error['email'] = 'Email can not be Empty';
      }

      if (exit_email($email)) {
        $error['email'] = 'Email already exists, pich another';
      }

       if ($password  == '') {
           $error['password'] = 'Password is empty';
      }  

      
      

      foreach ($error as $key => $value) {
        if (empty($value)) {
            
          unset($error);
            // login_user($username,$password);
         
        }
        
      }


      if(empty($error)){
        register_user($username ,$email,$password );
      }


    }
     // second conditional
     // end main if
    ?>
    <!-- Page Content -->
    <div class="container">

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                      
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" autocomplete="on" value="<?php echo isset($username)? $username : ''; ?>">
                            <p class="text-danger"><?php echo  isset($error)? $error['username']."*": ''; ?></p>
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" autocomplete="on" value="<?php echo isset($email)? $email: ''; ?>">
                            <p class="text-danger"><?php echo  isset($error)? $error['email']."*": ''; ?></p>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            <p class="text-danger"><?php echo  isset($error)? $error['password']."*": ''; ?></p>
                        </div>

                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-primary btn-block" value="REGISTOR">
                    </form>

                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<hr>
<?php include "includes/footer.php";?>