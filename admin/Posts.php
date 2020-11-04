<?php include('includes/header.php'); ?>

<div id="wrapper">

        <!-- Navigation -->
       <?php include('includes/navegation.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Dashboard
                            <small>Author</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Result
                            </li>
                        </ol>
                    </div>
                    <div class="col-sm-12">

                      <?php
                        if(isset($_GET['source'])){

                            $source = $_GET['source'];
                        }else{

                            $source = '';
                        }

                        switch($source){

                            case 'add_post';
                            include('includes/add_posts.php');
                            break;

                            case 'edit_post';
                             include('includes/edit_posts.php');
                            break;

                            default;
                                /// code here
                                include('includes/viwe_all_posts.php');

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
