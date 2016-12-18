<?  session_start();
ob_start("ob_gzhandler");
require_once('inc/connectDB.php');

header("Content-Type: text/html; charset=utf-8");
if($_SESSION['userid'] == "") {
    echo "<script> 
				alert('!!!!Username and Password incorrect!!!!');
				document.location.href='../admin.php';
			</script>";

}else{

}

date_default_timezone_set("Asia/Bangkok");


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>กรมส่งเสริมการเกษตร กระทรวงเกษตรและสหกรณ์ &#8211; กรมส่งเสริมการเกษตรมีคนอยู่ทั่วทุกทิศ เป็นมิตรแท้ของเกษตรกร</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="../css/doae.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/css/survey.css">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="../css/jquery.fileupload.css">
    <link rel="stylesheet" href="../css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="../css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="../css/jquery.fileupload-ui-noscript.css"></noscript>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='../css/fullcalendar.css' rel='stylesheet' />
    <link href='../css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <link rel="stylesheet" media="all" type="text/css" href="../calendar/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../calendar/jquery-ui-timepicker-addon.css" />
    <script src='../js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script type="text/javascript" src='../js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src='../js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js'></script>
    <script src='../js/fullcalendar-2.1.1/fullcalendar.js'></script>
    <script src='../js/fullcalendar-2.1.1/lang/en-au.js'></script>

    <script type="text/javascript" src="../calendar/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../calendar/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="../calendar/jquery-ui-sliderAccess.js"></script>
    <script type="text/javascript" src="js/jquery-validation/dist/jquery.validate.js"></script>


</head>

<body>

