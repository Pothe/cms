<table class="table table-bordered ">
                            <thead>
                                <tr>
                                  <th scope="col">ID </th>
                                  <th scope="col">User Name</th>

                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Email</th>
                                   <th scope="col">Profile</th>
                                  <th scope="col">Roles</th>
                                  <th scope="col">optoins</th>


                                </tr>
                              </thead>
                              <tbody>

                               <?php
                                  $query ="SELECT * FROM users";
                                  $result = mysqli_query($conn, $query);
                                  if(!$result){
                                      die("QUERY FAIL".mysqli_error($conn));
                                  }
                                  while($row = mysqli_fetch_assoc($result)){

                                    $user_Id = $row['user_id'];
                                    $user_name = $row['user_name'];
                                    $user_password = $row['user_password'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];
                                    $user_email = $row['user_email'];
                                    $user_images = $row['user_images'];
                                    $user_role= $row['user_role'];



                                      echo  "<tr>";
                                      echo "<th scope='col'>{$user_Id}</th>";


//                                      $query =" SELECT * FROM categories WHERE cat_id = {$Post_category_id}";
//                                      $select_cat = mysqli_query($conn,$query);
//                                      while($row = mysqli_fetch_assoc($select_cat) ){
//                                      $cat_title = $row['cat_title'];
//
//                                     echo "<th scope='col'>{$cat_title}</th>";
//
//                                      }
//



                                      echo "<th scope='col'>{$user_name}</th>";
//                                      echo "<th scope='col'>{$user_password}</th>";

                                      echo "<th scope='col'>{$user_firstname}</th>";

                                      echo "<th scope='col'>{$user_lastname}</th>";
                                      echo "<th scope='col'>{$user_email}</th>";
                                       echo "<th scope='col'><img class='img-responsive' width = 100 src='../images/$user_images' alert='image'></th>";

                                      echo "<th scope='col'>{$user_role}</th>";
//                                      echo "<th scope='col'>{$Post_status}</th>";
                                      echo "<th scope='col'><a href='users.php?delete={$user_Id}'>Delete</a> || <a href='users.php?change_to_admin={$user_Id}'>Administrator</a> || <a href='users.php?change_to_subscribe={$user_Id}'>subscribe</a>| <a href='users.php?source=edit_users&edit_user={$user_Id}'>Edit</a></th>";




                                    echo "</tr>";

                                      }


                                ?>

                              </tbody>
                            </table>
                            <?php


                             if(isset($_GET['change_to_admin'])){
                                $change_to_admin = $_GET['change_to_admin'];

                                $query = "UPDATE users SET user_role = 'administrator' WHERE user_id = $change_to_admin ";
                                $change_query = mysqli_query($conn, $query);
                                confirmQuery($change_query);
                                 header("Location: users.php");

                              }

                              if(isset($_GET['change_to_subscribe'])){
                                $sub_to_admin = $_GET['change_to_subscribe'];
                                $query = "UPDATE users SET user_role = 'subscribe' WHERE user_id = $sub_to_admin ";
                                $change_query = mysqli_query($conn, $query);
                                confirmQuery($change_query);
                                 header("Location: users.php");
                              }

                            if(isset($_GET['delete'])){
                              // ការពារការលុបមកពី Front End site​ ដោយគ្នានការអនុញ្ញា
                               if (isset($_SESSION['user_role'] )) {
                                   if($_SESSION['user_role'] == 'administrator') {
                                     $delete = mysqli_real_escape_string($conn,$_GET['delete']);
                                     $query = "DELETE FROM users WHERE user_id = $delete ";
                                     $delete_query = mysqli_query($conn, $query);
                                     confirmQuery($delete_query);
                                     header("Location: users.php");
                                   }
                                 }

                               }






                                ?>
