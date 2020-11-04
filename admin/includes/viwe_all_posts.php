<?php
include("delete_modal.php");
  if (isset($_POST["checked"])) {
     //$checkall= array($_POST['checking']);
     //$bulk = $_POST["checked"];
     foreach ($_POST["checked"]as $Post_Value) {

     $bulk_Options = $_POST['bulk_Options'];
     switch ($bulk_Options) {
      case 'published':
      $query = "UPDATE posts SET Post_status = '{$bulk_Options}' WHERE Post_Id = '{$Post_Value}' ";
      $bulk_update_posts = mysqli_query($conn,$query);
      confirmQuery($bulk_update_posts);
      break;
      case 'draft':
      $query = "UPDATE posts SET Post_status = '{$bulk_Options}' WHERE Post_Id = '{$Post_Value}' ";
      $resutl = mysqli_query($conn,$query);
      confirmQuery(  $resutl);
      break;
      case 'delete':
      $query = "DELETE FROM posts WHERE Post_Id = '{$Post_Value}' ";
      $resutl = mysqli_query($conn,$query);
      confirmQuery(  $resutl);
      break;
      case 'clone':
      $query ="SELECT * FROM posts WHERE Post_Id={$Post_Value}";
      $result = mysqli_query($conn, $query);
      if(!$result){
      die("QUERY FAIL".mysqli_error($conn));
      }
      while($row = mysqli_fetch_assoc($result)){
      $Post_Id = $row['Post_Id'];
      $Post_category_id = $row['Post_category_id'];
      $Post_title = $row['post_title'];
      $Post_author = $row['post_author'];
      $Post_user =$row['post_user'];
      $post_date = $row['post_date'];
      $post_image = $row['post_image'];
      $post_tags = $row['post_tags'];
      $post_content = $row['post_content'];
      $Post_comment_count = $row['Post_comment_count'];
      $Post_status = $row['Post_status'];
     }
      $query = "INSERT INTO posts(Post_category_id,post_title,post_author,post_user,post_date,post_image,post_content,post_tags,Post_status)
      VALUES('{$Post_category_id}','{$Post_title}','{$Post_author}','{$Post_user}', now(),'{$post_image}','{$post_content}','{$post_tags}','{$Post_status}')";
      $create_post_query = mysqli_query($conn, $query);
      confirmQuery($create_post_query);
      break;
    }
      }
    }

 ?>



<form action=""  method="POST">
    <div  id="bulkOptionContainer">
      <div class="row">
        <div class="col-md-4">
          <select name="bulk_Options" class="form-control custom-select">
              <option value="">Section action</option>
              <option value="published">Published</option>
              <option value="draft">Draft</option>
              <option value="delete">Delete</option>
               <option value="clone">Clone</option>
          </select>
        </div>
        <div class="col-md-4">
          <input type="submit" name="submit" class="btn btn-primary input-group-text" value="Apply">
          <a href="posts.php?source=add_post" class="btn btn-primary">Add New</a>
        </div>
       </div>


  <table class="table table-bordered">
   <thead>
      <tr>
          <th scope="col"><input type="checkbox" id="selectAllBoxes" name="checking"> </th>
          <th scope="col">ID</th>
          <th scope="col">Category</th>
          <th scope="col">Users</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Images</th>
          <th scope="col">Tages</th>
          <th scope="col">comments</th>
          <th scope="col">Status</th>
          <th scope="col">View Post</th>
          <th scope="col">Remove</th>
          <th scope="col">Update</th>
          <th scope="col">Viewers</th>
       </tr>
      </thead>
    <tbody>

          <?php

            // $query ="SELECT * FROM posts ORDER BY Post_Id DESC";


            /*


              <<how to join between two tables in mysql>>

              $query ="SELECT tablename.columnsname,tablename.columnsname,tablename.columnsname,tablename.columnsname,tablename.columnsname,";
              $query .="tablename.columnsname,tablename.columnsname,tablename.columnsname";
              $query .="FROM tablename LEFT JOIN Tablename on Tablename.colunmsname = tablename.colunmsname";

              */
            $query = "SELECT posts.Post_Id,posts.Post_category_id,posts.post_title,posts.post_user,posts.post_date,posts.post_image,posts.post_tags,";
            $query.= "posts.post_content,posts.Post_comment_count,posts.Post_status,posts.post_view_count,";
            $query .= "categories.cat_id,categories.cat_title";
            $query .=" FROM posts";
            $query .=" LEFT JOIN categories ON posts.Post_category_id= categories.cat_id ORDER BY Post_Id DESC";
            $result = mysqli_query($conn, $query);
            if(!$result){
            die("QUERY FAIL".mysqli_error($conn));
            }
            while($row = mysqli_fetch_assoc($result)){
            $Post_Id = $row['Post_Id'];
            $Post_category_id = $row['Post_category_id'];
            $Post_title = $row['post_title'];
            //$Post_author = $row['post_author'];
            $Post_user= $row['post_user'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_tags = $row['post_tags'];
            $post_content = $row['post_content'];
            $Post_comment_count = $row['Post_comment_count'];
            $Post_status = $row['Post_status'];
            $post_view_count = $row['post_view_count'];
            $cat_title =$row['cat_title'];
            echo  "<tr class='align-middle mt-5'>";
            ?>
            <!-- clear our code like this -->
            <th scope='col'><input class='checkboxes' type='checkbox' name='checked[]' value='<?php echo $Post_Id;?> '></th>
            <?php
            echo "<th scope='col'>{$Post_Id}</th>";
            // $query =" SELECT * FROM categories WHERE cat_id = {$Post_category_id}";
            // $select_cat = mysqli_query($conn,$query);
            // while($row = mysqli_fetch_assoc($select_cat) ){
            // $cat_title = $row['cat_title'];
            echo "<th scope='col'>{$cat_title}</th>";
            // }
             if(!empty($Post_author)) {
               echo"<td scope='col'>{$Post_author}</td>";
             }elseif (!empty($Post_user)) {
               echo"<td scope='col'>{$Post_user}</td>";
             }
            // echo "<td scope='col'>{$Post_author}</td>";
            echo "<td scope='col'>{$Post_title}</td>";
            echo "<td scope='col'>{$post_date}</td>";
            echo "<td scope='col'><img class='img-responsive' width = 100 src='../images/$post_image' alert='image'></td>";
            echo "<td scope='col'>{$post_tags}</td>";
            // three code lines are use to count comments for specific post
            $query = "SELECT * FROM comments WHERE comment_post_id = {$Post_Id}";
            $send_comment_count = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($send_comment_count)){
            $comment_id = $row['comment_id'];
            }
            $comment_count = mysqli_num_rows($send_comment_count);
            echo "<td scope='col'><a  href='post_comments.php?id=$Post_Id'>$comment_count</a></td>";
            if ($Post_status== 'draft') {
              echo "<td scope='col' class='btn btn-danger btn-sm' style='margin-top:10px; width:100%'>{$Post_status}</td>";
            }else {
              echo "<td scope='col' class='btn btn-success btn-sm' style='margin-top:10px; width:100%'>{$Post_status}</td>";
            }
            echo "<td scope='col'><a href='../post.php?p_id={$Post_Id}'>View Post</a> </td>";
            echo "<td scope='col'><a  rel='$Post_Id' href='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a></td>";
            // echo "<td scope='col'><a onClick=\"javascript: return confirm('Are you sure to delete this?'); \" href='posts.php?delete={$Post_Id}'>Delete</a>
            echo"<th scope='col'><a href='posts.php?source=edit_post&update_post={$Post_Id}'>Edit</a></td>";
            echo "<td scope='col'><a href='posts.php?reset={$Post_Id}'>{$post_view_count}</a></td>";
            echo "</tr>";
          }
           ?>
          </tbody>
        </table>
        </form>
      </div>


  </div>




        <?php
         if(isset($_GET['delete'])){
           // to prevent front end delete
           if (isset($_SESSION['user_role'])) {
            if ($_SESSION['user_role'] == 'administrator') {
                $delete = mysqli_real_escape_string($conn,$_GET['delete']);
                $query = "DELETE  FROM posts WHERE post_id = $delete";
                $delete_query = mysqli_query($conn, $query);
                confirmQuery($delete_query);
                header("Location: Posts.php");
         }

      }

  }
          // function to reset view post comment
          // reset key we from view_all_post at view Post
          if(isset($_GET['reset'])){
              $Post_reset = $_GET['reset'];
              $query = "UPDATE posts SET post_view_count = 0 WHERE post_id =".mysqli_real_escape_string($conn,$_GET['reset']). "";
              $reset_Post_query = mysqli_query($conn, $query);
              confirmQuery($reset_Post_query);
              header("Location: Posts.php");
              }
        ?>

     <script>
  	  $(document).ready(function(){
  		$(".delete_link").on('click', function()
      {
        // rel attribute from above
        var id = $(this).attr( "rel");
        var delete_url ="posts.php?delete="+ id + " ";
        // check href from modal_delete_link
        $(".modal_delete_link").attr("href",delete_url);
        // open file modal file
        $("#myModal").modal('show');



  		});

  	});
  	</script>
