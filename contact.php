
 <?php  include "includes/header.php"; ?>
    <!-- Navigation -->
    <?php  include "includes/navigation.php"; ?>
    <?php
    //the Message
    // $msg = "SECOND EMAIL YESS";
    // // USE wordwrap()IF LINES ARE LONGER THEN 70 CHARACTERS
    // $msg = wordwrap($msg,70);
    // mail("keoutpothe2014@gmail.com","My Subject",$msg);
     if(isset($_POST['submit'])){
        $to = "keoutpothe2014@gmail.com";
        $header ="From:". $_POST['email'];
        $subject = wordwrap($_POST['subject'],70);
        $body= $_POST['body'];
        if(!$header) {
            echo "<div class='alert alert-danger' role='alert'>
                សូមអ្នកប្រាដកថាអ្នកបានបំពេញគ្រប់លក្ខណ ដូចជា Email, Subject ហើយនិង Message!
              </div>";
          // code...
        }elseif (!$subject) {
        echo"<div class='alert alert-danger' role='alert'>
            សូមអ្នកប្រាដកថាអ្នកបានបំពេញគ្រប់លក្ខណ ដូចជា Email, Subject ហើយនិង Message!
            </div>";
        }elseif (!$body) {
          echo "<div class='alert alert-danger' role='alert'>
            សូមអ្នកប្រាដកថាអ្នកបានបំពេញគ្រប់លក្ខណ ដូចជា Email, Subject ហើយនិង Message!
            </div>";
        }else {
          // mail functino that is used
          mail($to,$subject,$body,$header);
        }

      }


     ?>
    <!-- Page Content -->
    <div class="container">
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Contact us</h1>
                    <form role="form" action="contact.php" method="post" id="login-form" autocomplete="off">
                      <div class="form-group">
                         <label for="email" class="sr-only">Email</label>

                         <input type="email" name="email" id="email" class="form-control" placeholder="សូមបំពេញអ៊ីម៉ែលរបស់អ្នក" required autofocus onblur=";sdlkf;lsdka;flksd;lf">
                     </div>
                         <div class="form-group">
                            <label for="Subject" class="sr-only">Subject</label>

                            <input type ="text" name="subject" id="email" class="form-control" placeholder="សូមបំពេញចំណង់ជើងរបស់អ្នក។">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Information here</label>

                            <textarea class="form-control" name="body" rows="15" cols="80" placeholder="សូមសរសេរខ្លឹមសារនៃអត្ថបទ"></textarea>
                        </div>
                        <button type="submit" name="submit" id="btn-login" class="btn btn-custom btn-primary btn-block">Submit <i class="fas fa-arrow-alt-right"></i></button>
                        <!-- <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-primary btn-block" value="Send"> -->
                    </form>

                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<hr>



<?php include "includes/footer.php";?>
