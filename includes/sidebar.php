<div class="col-md-4">

    <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>

                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit"  type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>

                    </form>
                    <!-- /.input-group -->
                </div>
                <!--- login user well --->
        <div class="well">

          <?php if(isset($_SESSION['user_role'])): ?>

        <h1>logged as: <span class="text-primary"><?php echo $_SESSION['username'] ?></span></h1>
        <a href="includes/logout.php" class="btn btn-primary btn-sm-4">LOG OUT</a>

          <?php else: ?>

            <form action="includes/login.php" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text"  name="username" class="form-control" placeholder="username">

                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-primary login_btn">
                </div>
            </form>

          <?php endif; ?>






        </div>
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 >CATEGORIES</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                               <?php
                                    $query = "SELECT * FROM categories";
                                    $cat_side = mysqli_query($conn, $query);
                                   while($row = mysqli_fetch_assoc($cat_side)){
                                     $cat_id = $row['cat_id'];
                                    $categories = strtoupper($row['cat_title']);
                                       echo "<hr>
                                            <li class='hover'><a href='category.php?category=$cat_id'>{$categories}</a></li>
                                            </hr>";
                                   }

                                ?>



                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
<!--
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
-->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
</div>
