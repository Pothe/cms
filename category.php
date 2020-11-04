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
                if(isset($_GET['category'])){
                    $Post_cat = $_GET['category'];
                    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'administrator') {
                      $query = "SELECT * FROM posts WHERE Post_category_id = $Post_cat";
                    }else {
                      $query = "SELECT * FROM posts WHERE Post_category_id = $Post_cat AND Post_status='published'";
                    }

                    $sellect_all_posts = mysqli_query($conn,$query);
                    if (mysqli_num_rows($sellect_all_posts)<1) {
                      echo "<div class='alert alert-danger' role='alert'>
                         DON'T A POST AVAILABLE!
                      </div>";
                    }else{
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
                    <a href="post.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_user; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted <?php echo  $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?> " alt="">
                <hr>
                <p><?php echo htmlspecialchars($post_content) ; ?></p>



             <?php } } } else{
                header("Location: index.php");

             }?>





             <!---close while loo --->





            </div>


            <!-- Blog Sidebar Widgets Column -->
            <?php include('includes/sidebar.php') ;?>
         </div>
        </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include('includes/footer.php');?>
