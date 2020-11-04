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
                
                
                   
    if(isset($_POST['submit'])){
        
        $search = $_POST['search'];
        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' or post_title LIKE '%$search%' or post_date LIKE '%$search%' or post_content LIKE '%$search%'  ";
        $search_query = mysqli_query($conn,$query);
        if(!$search_query){
            die("QUERY FAILED". mysqli_error($conn)); 
        }
        
        $count = mysqli_num_rows($search_query);
        if($count == 0){
            echo '<div class="alert  alert-danger" role="alert">
                Your search does not have any result!
            </div>';
            
        }else{
            
            $query = "SELECT * FROM posts";
                    $sellect_all_posts = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($sellect_all_posts)){
                    
                     $post_title = $row['post_title'];
                     $post_author = $row['post_author'];
                     $post_date = $row['post_date'];
                     $post_content = $row['post_content'];
                 
              ?>                                 
                

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?> </a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted <?php echo  $post_date; ?></p>
                <hr>
              
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>    
             <?php  }}} ?>
                
                            
                
                       
                                  
              
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
