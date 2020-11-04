
                            <table class="table table-bordered ">
                              <thead>
                                <tr>
                                  <th scope="row">ID </th>

                                  <th scope="row">Author</th>
                                  <th scope="row">Email</th>
                                  <th scope="row">Contents</th>
                                   <th scope="row">status</th>
                                  <th scope="row">In Response to</th>
                                  <th scope="row">Date</th>
                                  <th scope="row">Aprove</th>
                                   <th scope="row">Unapprove</th>

                                   <th scope="row">Delete</th>

                                </tr>
                              </thead>
                              <tbody>

                               <?php
                                  $query ="SELECT * FROM comments ";
                                  $result = mysqli_query($conn, $query);
                                  if(!$result){
                                      die("QUERY FAIL".mysqli_error($conn));
                                  }
                                  while($row = mysqli_fetch_assoc($result)){

                                    $comment_id = $row['comment_id'];
                                    $comment_post_id = $row['comment_post_id'];
                                    $comment_author = $row['comment_author'];
                                    $comment_email = $row['comment_email'];
                                    $comment_content = $row['comment_content'];
                                    $comment_status = $row['comment_status'];
                                    $comment_date = $row['comment_date'];

                                      echo  "<tr>";
                                      echo "<th scope='row'>{$comment_id}</th>";
                                      echo "<th scope='row'>{$comment_author}</th>";
                                      echo "<th scope='row'>{$comment_email}</th>";
                                      echo "<th scope='row'>{$comment_content}</th>";
                                      echo "<th scope='col'>{$comment_status}</th>";
                                    $query = "SELECT * FROM posts WHERE Post_Id =$comment_post_id";
                                    $result1 =mysqli_query($conn,$query);
                                    if(!$result1){
                                        die('QUERY FAILED'.mysqli_error($conn));
                                    }
                                    while($row = mysqli_fetch_assoc($result1)){
                                        $post_id = $row['Post_Id'];
                                        $post_title = $row['post_title'];
                                         echo "<th scope='col'><a href='../post.php?p_id=$post_id'>$post_title</a></th>";
                                    }




                                      echo "<th scope='col'>{$comment_date}</th>";
                                      echo "<th scope='col'><a href='comments.php?approve={$comment_id}'>Approve</a> </th>";
                                      echo "<th scope='col'><a href='comments.php?unapprove=$comment_id'>unapprove</a>
                                      </th>";
                                      echo "<th scope='col'>
                                      <a href='comments.php?delete=$comment_id'>Delete</a>
                                      </th>";
                                    echo "</tr>";

                                      }
                                ?>
                            </tbody>
                            </table>
                            <?php
                                if(isset($_GET['approve'])){
                                $comment_approve = $_GET['approve'];
                                $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id =$comment_approve";
                                $approve_query = mysqli_query($conn,$query);
                                 header("Location: comments.php");
                            }

                            if(isset($_GET['unapprove'])){
                                $comment_unapprove = $_GET['unapprove'];
                                $query = "UPDATE comments SET comment_status= 'unapprove' WHERE comment_id =$comment_unapprove";
                                $unapprove_query = mysqli_query($conn,$query);
                                 header("Location: comments.php");
                            }
                            if(isset($_GET['delete'])){
                                $comment_delete = $_GET['delete'];
                                $query = "DELETE FROM comments WHERE comment_id=$comment_delete";
                                $delete_query = mysqli_query($conn, $query);
                                 header("Location: comments.php");
                            }
                                ?>
