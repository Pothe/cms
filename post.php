

<?php
include('includes/header.php');
?>
    <!-- Navigation -->
   <?php include('includes/navigation.php'); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8 ">

                <?php

                if(isset($_GET['p_id'])){
                    $Post_id = $_GET['p_id'];
                // TO COUNT VIEW WHEN USER VIEW A SINGLE POST

                 $query = "UPDATE posts SET post_view_count = post_view_count + 1 ";
                 $query .= "WHERE Post_Id = $Post_id";
                 if (!$query ) {
                   die("QUERY FAIL".mysqli_error($conn));
                 }
                 // condition for users 
                 if (isset($_SESSION['user_role']) && $_SESSION['user_role'] =='administrator' ) {
                    $query = "SELECT * FROM posts WHERE Post_Id =$Post_id";
                 }else {
                    $query = "SELECT * FROM posts WHERE Post_Id = $Post_id AND Post_status = 'published' ";
                  }
                // SELECT A SINGLE POST
                    $sellect_all_posts = mysqli_query($conn,$query);
                    if (mysqli_num_rows($sellect_all_posts) < 1) {
                    echo "Are you sure, Have you been choosing corrected option";
                  }else {
                    while($row = mysqli_fetch_assoc($sellect_all_posts)){
                     $post_id = $row['Post_Id'];
                     $post_title = $row['post_title'];
                     $post_user = $row['post_user'];
                     $post_date = $row['post_date'];
                     $post_image = $row['post_image'];
                     $post_content = $row['post_content'];
                  ?>


                <!-- First Blog Post -->

                <h2>
                    <a href="#"><?php echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_user; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted <?php echo  $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?> " alt="">
                <hr>
               <!--htmlspecialchars -->
                <p><?php echo $post_content ; ?></p>



             <?php  } ?>
             <!---close while loo --->

                <!--this section is comment-->
              <?php
                // INSERT COMMENT TO A SINGLE POST
                if(isset($_POST['submit'])){
                  // CONNECT TO A KEY SET (p_id) from view_all_post in edit link
                   $Post_id = $_GET['p_id'];
                   $username = $_POST['author_comment'];
                   //mysqli_real_escape_string to avoid string
                   $username = mysqli_real_escape_string($conn,$username);
                   $email = $_POST['email'];
                   $comment = $_POST['comment'];
                   $comment = mysqli_real_escape_string($conn,$comment);

                    // validate comment if($username doesn't have date $email, $comment)
                  if(!empty($username) && !empty($email) && !empty($comment)){
                   // TO QUERY DATA INTO  COMMENT TABLE
                  $query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date)VALUES('{$Post_id}','{$username}','{$email}','{$comment}','unapprove',now())";
                    $result =mysqli_query($conn,$query);
                  if(!$result){
                    di('QUERY FAILED'.mysqli_error($conn));

                  }
                    // UPDATE TO COUNT NUMBER OF COMMENT TO EACH  SINGLE POST
                    // $query = "UPDATE posts SET Post_comment_count = Post_comment_count + 1 ";
                    // $query .= "WHERE Post_Id = $Post_id ";
                    // $update_comment_count = mysqli_query($conn,$query);

                  }else{

                    // exacut this code
                    echo "<script> alert('the field can not be empty!')</script>";
                  }


                }

                ?>

           <div class="well">
           <h4>Leave a comment:</h4>
          <form action="" method="post" role="form">

         <div class="form-group">
         <label for="exampleFormControlTextarea1">Your name</label>
          <input type="text" name="author_comment" class="form-control">
    </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Email:</label>
  <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments </label>
    <textarea class="form-control" id="exampleFormControlTextarea1"  name="comment"rows="3"></textarea>
  </div>
<div class="form-group">
    <button type="submit" class="btn btn-primary" name="submit"  value="Submit">Submit</button>

  </div>


</form>


   </div>


        <?php

                $query = " SELECT * FROM comments WHERE comment_post_id = {$post_id} ";
                $query .= " AND comment_status = 'approved' ";
                $query .= " ORDER BY comment_id DESC ";

                $result = mysqli_query($conn,$query);
                if(!$result){
                die("QUERY FAIL".mysqli_error($conn));
                }
                while($row = mysqli_fetch_array($result)){

                $comment_author = $row['comment_author'];
                $comment_content = $row['comment_content'];
                $comment_date = $row['comment_date'];

                ?>

                    <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author ; ?>
                            <small><?php echo $comment_date ; ?></small>
                        </h4>
                       <?php echo $comment_content ; ?>
                        <!-- Nested Comment -->

                    </div>
                </div>

                <?php } } }else{
                    header("Location: index.php");
                  }?>







</div>
   <div>
       <?php include('includes/sidebar.php') ;?>
   </div>

</div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include('includes/footer.php');?>
