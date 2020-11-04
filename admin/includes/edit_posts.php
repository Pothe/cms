<?php

 if(isset($_GET['update_post'])){

   $the_update_post = $_GET['update_post'];
}
 $query ="SELECT * FROM posts WHERE Post_Id = $the_update_post ";
 $result = mysqli_query($conn, $query);
    if(!$result){
    die("QUERY FAIL".mysqli_error($conn)); }

    while($row = mysqli_fetch_assoc($result)){

    $Post_Id = $row['Post_Id'];
    $Post_category_id = $row['Post_category_id'];
    $Post_title = $row['post_title'];
    $post_user = $row['post_user'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_content = $row['post_content'];
    $Post_comment_count = $row['Post_comment_count'];
    $Post_status = $row['Post_status'];
    }

if(isset($_POST['submit'])){
     $title = $_POST['pt'];
     $title= mysqli_real_escape_string($conn,$title);
     $post_category_id = $_POST['category'];
     $post_user = $_POST['pau'];
     $post_user= mysqli_real_escape_string($conn,$post_user);
     $post_status = $_POST['ps'];
     $post_image = $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
     $post_date = date('d-m-y');
     $tags = $_POST['t'];
     $post_conten = $_POST['pc'];
     $post_conten = mysqli_real_escape_string($conn,$post_conten);


     move_uploaded_file($post_image_temp, "../images/$post_image");
       // select image when fiel is empty
        if(empty($post_image)){
         $query = "SELECT * FROM posts WHERE Post_Id = $Post_Id";
         $select_image = mysqli_query($conn,$query);
         while ($row = mysqli_fetch_array($select_image)){
         $post_image = $row['post_image'];

       }
    }

    $query = "UPDATE posts SET post_title = '{$title}', Post_category_id = '{$post_category_id}',post_user ='{$post_user}',post_date = now(), post_image = '{$post_image}', post_content ='{$post_conten}', post_tags = '{$tags }', Post_status = '{$post_status}' WHERE Post_Id ='{$the_update_post}'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("QUERY FAIL!" .mysqli_error($conn));
    }
    header("Location: Posts.php");
}

?>
 <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input  value="<?php echo $Post_title; ?>"type="text" name="pt" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Categories</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">

      <?php
      $query =" SELECT * FROM categories";
      $result= mysqli_query($conn,$query);
      confirmQuery($result);
      while($row = mysqli_fetch_assoc($result) ){
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      if ($cat_id == $Post_category_id) {
        echo "<option  selected value='{$cat_id}'>{$cat_title}</option>";
    }else {
        echo "<option  value='{$cat_id}'>{$cat_title}</option>";
    }
}
    ?>

      </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Post user</label>

    <select name="pau" class="form-control" id="exampleFormControlSelect1">

       <!-- make default user -->

        <!--- end make default user-->
        <?php
           $query =" SELECT * FROM users ";
           $result= mysqli_query($conn,$query);
           confirmQuery($result);
           while($row = mysqli_fetch_assoc($result) ){
           $user_id = $row['user_id'];
           $username = $row['user_name'];
           echo "<option value='{$username}'>{$username}</option>";
           }
      ?>
      </select>


     <!-- <input  value="<?php //echo $post_user; ?>"type="text" name="pau" class="form-control" id="exampleFormControlInput1" placeholder="Author"> -->
  </div>



    <div class="form-group">
      <label for="exampleFormControlSelect1">Post Status</label>
      <select name="ps" class="form-control" id="exampleFormControlSelect1">
      <option value="<?php echo  $Post_status; ?> "><?php echo  $Post_status; ?></option>

      <?php if ($Post_status == 'published'){

         echo "<option value='draft'>draft </option>";

      }else{

        echo "<option value='published'>published</option>";

      }


       ?>


    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Upload image</label>
      <img width="100" src="../images/<?php echo $post_image ;?>">
      <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Post status">

  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Tags</label>
     <input  value="<?php echo $post_tags ;?>"type="text" name="t" class="form-control" id="exampleFormControlInput1" placeholder="key words">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Conten</label>

    <textarea name="pc"class="form-control" id="body" rows="3"><?php echo str_replace('\r\n','</br>',$post_content)  ;?>
    </textarea>
  </div>
   <div class="form-group">

 <button type="submit" name="submit" class="btn btn-primary">Save Post</button>
  </div>
</form>
