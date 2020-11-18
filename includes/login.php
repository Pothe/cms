<?php session_start() ?>
<?php include "db.php" ; ?>
<?php include"../admin/functions.php"; ?>


<?php

if (isset($_POST['login'])) {
   login_user($_POST['username'],$_POST['password']);
 // $username = $_POST['username'];
 // $password = $_POST['password'];
 /*
 
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

}
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
  if ($_SESSION['user_role'] == "administrator") {
    header("Location: ../admin");
  }elseif ($_SESSION['user_role'] == "student") {
   header("Location: ../student_site");

  }else {
    header("Location: ../index.php");
      }

    }


 */
  
 }

?>
