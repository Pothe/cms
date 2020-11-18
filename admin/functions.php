<?php
// tracknig users online
 function users_online(){
   global $conn;
     // if (isset($_GET['usersonline'])) {
     // session_start();
     // if (!$conn) {
     // include("../includes/db.php");

     $session = session_id();
     $time = time();
     $time_out_in_second = 60;
     $time_out = $time - $time_out_in_second;
     $query ="SELECT * FROM users_online WHERE session ='$session'";
     $send_query =mysqli_query($conn,$query);
     $count = mysqli_num_rows($send_query);

     // if users not new
     if($count == NULL){
       mysqli_query($conn,"INSERT INTO users_online(session,time) VALUES('$session','$time')");
     }else{
       // new users login track
       mysqli_query($conn,"UPDATE users_online SET time='$time' WHERE session ='$session'");

     }
     // to query user_online
     $user_online_query = mysqli_query($conn, "SELECT * FROM users_online WHERE time >'$time_out'");
      return $count_users = mysqli_num_rows($user_online_query);
    // }// if(!$conn not set)
    // }// get request
  }



// confirm connect to database
 function confirmQuery($result){
     global $conn;
     if(!$result){
         die("QUERY FAIL!".mysqli_error($conn));
     }
 }

function insert_categories(){

    global $conn;
       if(isset($_POST['submit'])){
         $cat_title = $_POST['cat'];
        $cat_title = mysqli_real_escape_string($conn, $cat_title);


        if($cat_title== "" || empty($cat_title )){
         echo "<div class='alert alert-danger' role='alert''>
         This field should not be emplty
            </div>";
        }else{
          $stmt =mysqli_prepare($conn,"INSERT INTO categories (cat_title)VALUE(?)");
          mysqli_stmt_bind_param($stmt,'s',$cat_title);
          mysqli_stmt_execute($stmt);
        //  $query = "INSERT INTO categories (cat_title)VALUE('$cat_title')";
        // $create_category = mysqli_query($conn,$query);
    if(!$stmt){
    die('Query Fail' .mysqli_error($conn));
        }
      }


   }


}

function list_categories(){
     global $conn;

             $query =" SELECT * FROM categories";
             $cat_query = mysqli_query($conn,$query);
             while($row =mysqli_fetch_assoc($cat_query)){
             $cat_id= $row['cat_id'];
             $cat_title= $row['cat_title'];

            echo "<tr>" ;
            echo "<th scope='row'>{$cat_id}</th>";
            echo "<th scope='row'>{$cat_title}</th>";
            echo "<th scope='row'><a href='categories.php?remove={$cat_id}'>Delete</a> ||

            <a href='categories.php?edit={$cat_id}'>Edit</i></a></th>";
            echo "</tr>" ;



               };}

function update_categories(){

      global $conn;
                        if(isset($_GET['edit'])){
                            $edit_cat= $_GET['edit'];
                            include('includes/update_cat.php');
                        }
                      }

function   delete_categories(){
     global $conn;
      if(isset($_GET['remove'])){
        // ដើម្បីការពារលុបចេញពី Front end
        if (isset($_SESSION['user_role'])) {
        if ($_SESSION['user_role']== 'administrator') {
        $delte_cat= mysqli_real_escape_string($conn,$_GET['remove']);
        $query = "DELETE FROM categories WHERE cat_id ={$delte_cat}  ";
        $delete_query = mysqli_query($conn, $query);
        header("Location: categories.php");

         }
       }
     }
   }
// this function is used counts all
  function RecordCount($table){
    global $conn;
    $query ="SELECT * FROM ".$table;
    $select_all_post = mysqli_query($conn,$query);
    $post_count = mysqli_num_rows($select_all_post);
    confirmQuery($select_all_post);
    return $post_count;


  }

  // function to check statuse

  function CheckStatus($table,$columns,$status){
    global $conn;
    $query ="SELECT * FROM $table WHERE $columns = '$status' ";
    $select_all_published_post = mysqli_query($conn,$query);
      confirmQuery($select_all_published_post );
    return   mysqli_num_rows($select_all_published_post);


  }
// check if username administrator
  function is_admin($username){
    global $conn;
    $query ="SELECT user_role FROM users WHERE user_name ='$username'";
    $result = mysqli_query($conn,$query);
    confirmQuery($result);
    $row =mysqli_fetch_array($result);
    if ($row['user_role'] == 'administrator') {
      return true;
    }else{
      return false;
    }

  }

// to check if username is exit

function exit_username($username){
  global $conn;
  $query ="SELECT user_name FROM users WHERE user_name = '$username'";
  $result = mysqli_query($conn,$query);
  confirmQuery($result);
  if (mysqli_num_rows($result)) {
    return true;
  }else {

    return false;
  }
}


function exit_email($email){
  global $conn;
  $query ="SELECT user_name FROM users WHERE user_email = '$email'";
  $result = mysqli_query($conn,$query);
  confirmQuery($result);
  if (mysqli_num_rows($result)) {
    return true;
  }else {

    return false;
  }
}


function register_user($username,$email,$password){
      global $conn;
      // $username = trim($_POST['username']);
      // $email = trim($_POST['email']);
      // $password = trim($_POST['password']);
  
      //   if (exit_username($username)) {
            
      //   } 

          // if(!empty($username) && !empty($Email) && !empty($password)){

          // mysqli_real_escape-string to avoid string (called sql injection)
          $username = mysqli_real_escape_string($conn, $username);
          $email = mysqli_real_escape_string($conn, $email);
          $password = mysqli_real_escape_string($conn, $password);
          // នេះជាការប្រើប្រាស់ Crypt Password ដែលមានលក្ខណៈខ្លីជាមុន
          $password = password_hash($password, PASSWORD_BCRYPT, array('cost' =>12));

          // នេះគឺជាការប្រើប្រាស់ Crypt function
          // fetch from users where sandsalt.
          // $query = "SELECT randsalt FROM users";
          // $select_randsal = mysqli_query($conn,$query);
          // if (!$select_randsal) {
          //     die("Query FAIL!". mysqli_error($conn));
              # code...
          // }
          // show randsalt column data
          // $row = mysqli_fetch_array($select_randsal);
          // $randsalt = $row['randsalt'];
          // // prevent password by crypt password
          // $password = crypt($password,$randsalt);

        // insert data into users column by registration form
          $query = "INSERT INTO users(user_name,user_email,user_password,user_role)";
          $query .="VALUES ('{$username}','{$email}','{$password}','subscribe')";
          $result = mysqli_query($conn,$query);
          confirmQuery($result);
          // to check connection database
          // if(!$result){
          //     die("Query FAIL!". mysqli_error($conn));
          // }
          // ConfigQuery($result); 
          // alert message for users when registor ready
          // $message = "<span class='col-xs-12 btn btn-primary'>You are succesful!</span>";

       //    } else{
       //        // alert message for users when all fiels are empty
       //        $message = "<span class='col-xs-12 btn btn-danger'>All fields can't be empty</span>";
       //    }
       //    // end of second conditional

       // //  }else{
       // // //     prevent error when form
       // //    $message = "";
       // // }

      
    // }
  }

  function login_user($username,$password){
    global $conn;
    $username=trim($username);
    $password=trim($password);

    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);  

    $query = "SELECT * FROM users WHERE user_name = '{$username}' ";
    $select_user = mysqli_query($conn, $query);
    confirmQuery($select_user);
    
  while ($row = mysqli_fetch_array($select_user)) {
   $db_id = $row['user_id'];
   $db_user_name = $row['user_name'];
   $db_user_password = $row['user_password'];
   $db_user_firstname = $row['user_firstname'];
   $db_user_lastname = $row['user_lastname'];
   $db_role = $row['user_role'];


// to translate encrypt to default password
// $password_defence = password_verify($password,$db_user_password);
// check conditon
// if ($db_user_name !== $username_defence &&  $db_user_password !== $password_defence ) {
//  header("Location: ../index.php");
// }else if ($db_user_name == $username_defence &&  $db_user_password == $password_defence) {
// before we use session, have to start <?php session_start() ;
// password_verify turn true or false
  if(password_verify ($password,$db_user_password)){
  $_SESSION['user_id'] = $db_id;
  $_SESSION['username'] = $db_user_name ;
  $_SESSION['firstname'] = $db_user_firstname ;
  $_SESSION['lastname'] = $db_user_lastname ;
  $_SESSION['user_role'] = $db_role;
  // give permisson to access page
  // if ($_SESSION['user_role'] == "administrator") {
    header("Location:../admin");
  // }elseif ($_SESSION['user_role'] == "student") {
  //  header("Location: ../student_site");
  }else {
    header("Location: ../index.php");
    }

  }

}


// delete function  
 function delete($delete){
    global $conn;
    if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == 'administrator') {
      $delete = mysqli_real_escape_string($conn,$delete);
      $query = "DELETE  FROM posts WHERE post_id = $delete";
      $delete_query = mysqli_query($conn,$query);
      confirmQuery($delete_query);
      header("Location: Posts.php");
         }

      }

 }
  

// Redirect to page 
function Redirect_to($direction){
  global $conn;
  header("location: $direction");

}






?>
