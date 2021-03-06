<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/moltran/blue/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:16 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Moltran - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <!-- Custom Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
    <style type="text/css">
        .wrapper-page {
    margin: 7.5% auto;
    width: 33%;
}
.card-body{
    height:240px;
}
    </style>
    <body>


        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-header bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Reset Password </h3>
                </div> 

                <div class="card-body"><br>
                 <form method="post" action="{{url('forgetemail')}}" class="text-center"> 
                    @csrf()
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class="form-group m-b-0"> 
                        <div class="input-group"> 
                            <input type="email" class="form-control" placeholder="Enter Email" required=""> 
                            <span class="input-group-append"> <button type="submit" class="btn btn-primary waves-effect waves-light">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
	
	</body>

<!-- Mirrored from coderthemes.com/moltran/blue/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:16 GMT -->
</html>