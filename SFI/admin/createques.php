<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('form').submit(function(event) {
    event.preventDefault(); // Prevent the form from submitting via the browser
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize()
    }).done(function(data) {
        alert(data);
        $('#cat1')[0].reset();

    }).fail(function(data) {
        alert(data);
    });
  });
    });
</script>
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
       <?php
       include('nav.php');
       ?>
<div class="container" style="margin-top: 200px;">

                    <div class="row">

                        <div class="col-lg-6 col-sm-6">                     
                                <div class="card-header">
                                    <h3 class="text-center">Create Questions</h3>

                                </div>
                                
                                    <form action="createquest.php" method="POST" id="cat1" class="form-horizontal" style="background-color: #fff"  enctype="multipart/form-data">
                                        <div class="text-center">
                                        <label class="text-center">Select your question paper</label>
                                        <select class="form-control" style="height: 40px;" name="qpid">
                                <?php 
                                include('db.php');
                                $q1="select * from Paper";
                                $res=mysqli_query($db,$q1);
                                while($row=mysqli_fetch_array($res)){
                                    ?>
                                <option style="font-size: 15px;" value="<?php echo $row['qp_id']; ?>"><?php echo $row['q_name']; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                        </div>
                                                <div class="text-center">
                                                    <label class="text-center">Question</label>
                                            <textarea class="form-control" name="content" required></textarea>
                                                    </div>
                                                    <div class="text-center">

                                                    <label>option 1</label>
                                                    <input type="text" name="opt1" class="form-control" required>
                                                    </div>  
                                                    <div class="text-center">

                                                    
                                                    <label>option 2</label>
                                                    <input type="text" name="opt2" class="form-control" required>
                                                    </div>
                                                    <div class="text-center">
                                                    <label>option 3</label>
                                                    <input type="text" name="opt3" class="form-control" required>
                                                    </div>
                                                    <div class="text-center">
                                                    <label>option 4</label>
                                                    <input type="text" name="opt4" class="form-control" required>
                                                    </div>
                                                    <div class="text-center">
                                                    <label>Answer</label>
                                                    <input type="text" name="ans" class="form-control" required>
                                                    </div>
                                                            <br>
                                                            <div class="text-center">
                                                                <input type="submit" name='submit' value="Add question" class="btn btn-primary text-center" >
                                                            </div>
                                                    </form>
                                                   

                                            </div>

                                             <div class="col-lg-6 col-sm-6">                     
                                                               <img src="images/cat.gif" class="img-responsive">


                                
                                                            </div>

                                        </div>

</div>
<!--
==================================================
Slider Section Start
================================================== -->



<!--
==================================================
About Section Start
================================================== -->
 <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer" style="position: relative;">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Curve</a>. <br> 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- owl carouserl js -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>