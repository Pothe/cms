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
                // get request page and located in index.php at point loop page
                  if(isset($_GET['page'])){
                    $page =$_GET['page'];
                  }else {
                    $page = "";
                  }
                  $per_page = 5;
                  if($page == "" || $page=1){
                    $page_1 = 0;
                  }else {
                    $page_1 =($page*$per_page) -$per_page;
                  }

                // to make pagination
                if (isset($_SESSION['user_role']) && $_SESSION['user_role']=='administrator') {
                  $query = "SELECT * FROM posts";
                }else {
                  $query = "SELECT * FROM posts WHERE Post_status ='published'";
                }

                $find_count = mysqli_query($conn,$query);
                // mysqli_num_rows is used to count number
                $count = mysqli_num_rows($find_count);
                if ($count <1) {
                  echo "<div class='alert alert-danger' role='alert'>
                     Please! make sure you have done with posts published!
                  </div>";
                }else{
                // ceil is used to convert float to interger number
                      // ORDER BY Post_Id DESC
                    $count =ceil($count/$per_page);
                     $query = "SELECT * FROM posts ORDER BY Post_Id DESC  LIMIT $page_1,$per_page ";
                     $sellect_all_posts = mysqli_query($conn,$query);
                     while($row = mysqli_fetch_assoc($sellect_all_posts)){
                     $post_id = $row['Post_Id'];
                     $post_title = $row['post_title'];
                     $post_user = $row['post_user'];
                     $post_date = $row['post_date'];
                     $post_image = $row['post_image'];
                     $post_content = substr($row['post_content'],0,300);
                     $post_status= $row['Post_status'];
                ?>
                    <!-- First Blog Post -->

                    <h2>
                        <a href="post.php?p_id=<?php echo $post_id;?>">
                            <?php echo $post_title;?>
                        </a>
                    </h2>
                    <p class="lead">
                        by
                        <a href="author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>">
                            <?php echo $post_user;?>
                        </a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted
                        <?php echo  $post_date; ?>
                    </p>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <a href="post.php?p_id=<?php echo $post_id;?>"><img class="img-responsive float-left" src="images/<?php echo $post_image; ?> " alt=""></a>
                            <hr>
                        </div>
                    </div>
                    <p>
                        <?php echo ($post_content) ; ?>
                    </p>
                    <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                    <?php }} ?>
                    <!---close while loo --->
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <?php include('includes/sidebar.php') ;?>
        </div>

        <!-- to show result of pagination -->
        <ul class="pager">
            <?php
         // loop pagination
          for($i=1; $i<=$count; $i++){
            echo "<li><a href='index.php?page={$i}'><span class='active'>{$i}</span></a></li>";
          }
          ?>
        </ul>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php
        include('includes/footer.php');
        ?>