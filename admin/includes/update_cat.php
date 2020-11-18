                                             
                             <form action="" method="post">
                            <div class="form-group">
                                <label for="update">Update </label>
                                
                                <?php 
                                 // if(isset($_GET['edit'])){
                                 //     $edit_cat = $_GET['edit'];
                                     $query =" SELECT * FROM categories WHERE cat_id = $edit_cat";
                                     $select_cat_query = mysqli_query($conn,$query);
                                     while($row = mysqli_fetch_assoc($select_cat_query) ){
                                         
                                         $cat_title = $row['cat_title'];
                                         
                                         
                                    ?>
                                          
                                <input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" type="text" name="cat_title" class="form-control" >
                                  
                                      
                                <?php  }//}   ?>   
                                        
                                                                                                     
                            <?php
                                
                                ////// update QUERY
                                
                                if(isset($_POST['update'])){
                                    $the_cat_title = $_POST['cat_title'];
                                    $stmt = mysqli_prepare($conn,"UPDATE categories SET cat_title =? WHERE cat_id = ?");
                                    mysqli_stmt_bind_param($stmt,'si',$the_cat_title,$edit_cat) ;
                                    mysqli_stmt_execute($stmt);                                   
                                    // $query =" UPDATE categories SET cat_title ='{$the_cat_title}' WHERE cat_id = '{$edit_cat}'";
                                    // $update_cat_query = mysqli_query($conn,$query);
                                     if(!$stmt){
                                         die("QUERY FAIL".mysqli_error($conn));
                                     }
                                    header("Location: categories.php");
                                }
                                ?>
                        
                            
                             </div>   
                            
                            <div class="form-group">
                            <button type="submit" name="update" class="btn btn-primary">Save  </button>
                            </div>
                        </form> 