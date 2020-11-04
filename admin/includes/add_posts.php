 <?php
 if(isset($_POST['submit'])){
     $title = $_POST['pt'];
     $title= mysqli_real_escape_string($conn,$title);
     $post_category_id = $_POST['Pci'];
     $post_user = $_POST['pau'];
     $post_user= mysqli_real_escape_string($conn,$post_user);
     $post_status = $_POST['ps'];
     $post_image = $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
     $tags = $_POST['t'];
     $post_conten = $_POST['pc'];
     $post_conten = mysqli_real_escape_string($conn,$post_conten);
     $post_date = date('d-m-y');
//     $post_comment_count = 4;
     move_uploaded_file($post_image_temp, "../images/$post_image");

     $query = "INSERT INTO posts(Post_category_id,post_title,post_user,post_date,post_image,post_content,post_tags,Post_status)";
      $query .="VALUES  ('{$post_category_id}','{$title}','{$post_user}', now(),'{$post_image}','{$post_conten}','{$tags}','{$post_status}')";
     $create_post_query = mysqli_query($conn, $query);
     confirmQuery($create_post_query);
     // this function pull out the created id
     $post_id= mysqli_insert_id($conn);
     echo "<p class='bg-success'>Post Created:<a href='../post.php?p_id={$post_id}'>View Post</a> or<a href='posts.php?source=edit_post&update_post={$post_id}'>Edit more feature</a> </p>";
 }

?>




 <form action="" method="post" enctype="multipart/form-data">
   <div class="row">
     <div class="form-group col-xs-6">
       <label for="exampleFormControlInput1">POST TITLE</label>
       <input type="text" name="pt" class="form-control" id="exampleFormControlInput1" placeholder="Title">
     </div>
   </div>

  <div class="row">


  <div class="form-group col-xs-2">
   <label for="exampleFormControlSelect1">CATEGORIES</label>
    <select name="Pci" class="form-control" id="exampleFormControlSelect1">
      <?php
         $query =" SELECT * FROM categories";
         $result= mysqli_query($conn,$query);
         confirmQuery($result);
         while($row = mysqli_fetch_assoc($result) ){
         $cat_id = $row['cat_id'];
         $cat_title = $row['cat_title'];
        echo "<option value='{$cat_id}'>{$cat_title}</option>";
        }
        ?>
      </select>
  </div>
 </div>

  <div class="row">


  <div class="form-group col-xs-2">
    <label for="exampleFormControlSelect1">POST USERS</label>
     <!-- <input type="text" name="pau" class="form-control" id="exampleFormControlInput1" placeholder="Author"> -->
     <select name="pau" class="form-control" id="exampleFormControlSelect1">
       <?php
          $query =" SELECT * FROM users";
          $result= mysqli_query($conn,$query);
          confirmQuery($result);
          while($row = mysqli_fetch_assoc($result) ){
          $user_id = $row['user_id'];
          $username = $row['user_name'];
          echo "<option value='{$username}'>{$username}</option>";
          }
     ?>
       </select>
  </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-2">
    <label for="exampleFormControlSelect1">POST OPPTIONS</label>
    <select name="ps" class="form-control" id="">
      <option value="draft">Select Options</option>
      <option value="published">Published</option>
      <option value="draft">Draft</option>
    </select>

  </div>
  </div>
  <div class="row">
  <div class="form-group col-xs-6">
    <label for="exampleFormControlSelect1">INERT IMAGES</label>
     <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Post status">
  </div>
</div>
  <div class="row">
   <div class="form-group col-xs-6">
    <label for="exampleFormControlSelect1">TAGS</label>
     <input type="text" name="t" class="form-control" id="exampleFormControlInput1" placeholder="key words">
  </div>
  </div>
   <div class="row">
     <div class="form-group col-xs-6">
       <span class=" text-success">To add key tag to seperate by comma (ex: beautiful dog, cate).</span>
     </div>
   </div>


  <div class="row">
  <div class="form-group col-xs-6">
    <label for="exampleFormControlTextarea1">CONTENT</label>
    <textarea  name="pc"class="form-control" id="body" rows="6"></textarea>
  </div>

</div>

<div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">PUBLISH</button>
</div>





</form>
