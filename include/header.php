<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi KP Online</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />

    <script src="assets/date/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="assets/date/css/datepicker.css">
    <link rel="stylesheet" href="assets/jquery-ui.css" type="text/css"/>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/jquery-ui.js" type="text/javascript"></script>

    <!-- bootstrap time picker -->
    <script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.js"></script>
    <link rel="stylesheet" href="assets/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css">

    <script>
        $(function() {
            $('#tanggal').datepicker({
                format: 'yyyy-mm-dd',
                autoclose:true,
                todayHighlight: true
            });

            $('#tanggal2').datepicker({
                format: 'yyyy-mm-dd',
                autoclose:true,
                todayHighlight: true
            });

            $('#jampicker').clockpicker({
                autoclose: true
            });

        });
    </script>




     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">KP</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>