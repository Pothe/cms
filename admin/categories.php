  <?php ob_start();?>
   <?php include('includes/header.php'); ?>
     <!-- <?php //include('functions.php'); ?> -->


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
                    <div class="col-sm-6">
                       <?php  insert_categories(); ?>
                        <form action="categories.php" method="post">
                            <div class="form-group">
                                <label for="catogaries"> Add a new catagory</label>
                                <input type="text" name="cat" class="form-control" placeholder="add a new catagory">

                            </div>
                            <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Add new </button>
                            </div>
                        </form>


                       <?php // UPDATE QUERY CATEGORIES FUNCTION

                         update_categories();


                        ?>

                    </div>
                    <div class="col-sm-6">



                            <table class="table table-bordered ">
                              <thead>
                                <tr>
                                  <th scope="col">ID SERIAL</th>
                                  <th scope="col">CATEGORIES</th>
                                  <th scope="col">Options</th>

                                </tr>
                              </thead>
                              <tbody>
                                <?php // Finding all categories function
                                  list_categories();
                                ?>
                               <?php // delete categories function

                                 delete_categories();



                                  ?>


                              </tbody>
                            </table>






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
