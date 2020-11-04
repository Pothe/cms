<?php include('includes/header.php'); ?>
<div id="wrapper">
    <!--track users online-->
    <!-- Navigation -->
    <?php include('includes/navegation.php'); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    Welcome to Dashboard
                    <small class="text-danger"> <?php echo $_SESSION['username']?>
                    </small>
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
                </div>
                <div class="col-sm-6">
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'>
                                            <!-- this one line of code gets from RecordCount function -->
                                            <!-- ReconrdCount('nameofdatabase table')-->
                                            <?php echo $Post_count= RecordCount('posts'); ?>
                                        </div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left text-danger">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'>
                                            <?php echo $c_count = RecordCount('comments'); ?>
                                        </div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'>
                                            <?php echo $user_count = RecordCount('users'); ?>
                                        </div>
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'><?php echo $categories_count = RecordCount('categories'); ?></div>
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <?php
                // $query ="SELECT * FROM $table WHERE $colunms = '$status' ";
                // $select_all_published_post = mysqli_query($conn,$query);
                // $post_published_count = mysqli_num_rows($select_all_published_post);
                $post_published_count = CheckStatus('posts','Post_status','published');
                // $query ="SELECT * FROM posts WHERE Post_status = 'draft' ";
                // $select_all_draft_post = mysqli_query($conn,$query);
                // $post_draft_count = mysqli_num_rows($select_all_draft_post);
                $post_draft_count= CheckStatus('posts','Post_status','draft');
                // $query ="SELECT * FROM users WHERE user_role = 'administrator' ";
                // $collect_user_admin= mysqli_query($conn, $query);
                // $show_users_admin = mysqli_num_rows($collect_user_admin);
                $show_users_admin=CheckStatus('users','user_role','administrator');
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['ព័ត៌មានទាំអង','ចំនួនសរុប'],
                        <?php
                        $element_text =['ចំនួនព័ត៌មានសរុប','បានចេញ','មិនចេញ','ប្រភេទនៃព័ត៌មាន','អ្នកប្រើប្រាស់','អ្នកគ្រប់គ្រង់','វិចារ'];
                        $element_count =[$Post_count,$post_published_count, $post_draft_count,$categories_count,$user_count,$show_users_admin,$c_count];
                        for($i =0; $i<7; $i++) {
                        echo "['{$element_text[$i]}' " . "," . " '{$element_count[$i]}'], ";
                        }
                        ?>
                        ]);
                        var options = {
                        chart: {
                        title: '',
                        subtitle: '',
                        }
                        };
                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
                        chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                        </script>
                        <div id="columnchart_material" style="width:'auto'; height: 500px"></div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include('includes/footer.php'); ?>