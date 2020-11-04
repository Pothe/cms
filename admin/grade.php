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
                            <small>Grades</small>
                        </h1>
                        <form action="create_grade.php" method="post">
                        <div class="breadcrumb row">
                            
                              <div class="col-sm-12"> 
                              <div class="form-group">
                                  
                                  <input type="text" name="grade "class="form-control" placeholder="Add a new class" r>
                                 
                              </div> 
                              </div> 
                              
                               
                                 
                              </div> 
                                        
                              
                           
                                             
                        
                       
                        </form>
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
