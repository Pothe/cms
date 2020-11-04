<?php ob_start();?>
<?php include('includes/header.php'); ?>


<?php if (!is_admin($_SESSION['username'])) {
  header("location: index.php");
} ?>


<div id="wrapper">
        <!-- Navigation -->
       <?php include('includes/navegation.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Mss/Mr/Ms
                            <small class="text-danger"><?php echo $_SESSION['username'] ?></small>
                        </h1>
                    </div>

                   
                    <div class="col-sm-12">
                      <?php
                      // switch is used to controll pages by key word was setted
                      // example: source is a key we set to controll page
                        if(isset($_GET['source'])){

                            $source = $_GET['source'];
                        }else{

                            $source = '';
                        }
                        // Variable $source is used in switch statement
                        switch($source){
                            case 'add_user';
                            // add_user is a key word used to control add_users.php page
                            include('includes/add_users.php');
                            // add_users.php is a page showed when  user click any link that contain add_user
                            break;
                            case 'edit_users';
                             include('includes/edit_users.php');
                            break;
                            default;
                                /// code here
                                include('includes/view_all_users.php');
                         break;
                        }
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
     <?php include('includes/footer.php'); ?>
