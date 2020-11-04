<?php include('db.php');?>


       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">Start Bootstrap</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php

                    $query = " SELECT * FROM categories LIMIT 3";
                    $myqli_query_and_query = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($myqli_query_and_query)){
                       $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                        // category active
                        $categroy_class ='';
                        //$registration_class='';
                        //$admin_class='';
                        // page active
                        $contact_class ='contact.php';
                        $registration ='registration.php';
                        $admin_class ='index.php';
                        $pageName = basename($_SERVER['PHP_SELF']);
                        if(isset($_GET['category']) && $_GET['category'] ==$cat_id){
                            $categroy_class='active';
                        }elseif ($pageName == $registration) {
                          $registration_class ='active';
                        }elseif ($pageName==$contact_class) {
                           $contact_class='active';
                        }elseif ($pageName ==$admin_class) {
                          $admin_class='active';
                        }
                        echo "<li class='$categroy_class'><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                    }
                 ?>


                 <li class='<?php echo $contact_class; ?>'>
                     <a href="contact.php"><i class="fas fa-user">Contact us</i></a>
                 </li>
                    <li class="<?php echo $admin_class; ?>">
                        <a href="admin"><i class="fas fa-user">ADMIN</i></a>
                    </li>
                     <li class='<?php echo  $registration_class; ?>'>
                        <a href="registration.php"><i class="fas fa-user">Sig up</i></a>
                    </li>
<!--
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
-->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
