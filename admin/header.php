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
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="../css/doae.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="css/jquery.fileupload.css">
	<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
	<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
		<link href='css/fullcalendar.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
        <script src='js/fullcalendar-2.1.1/lib/moment.min.js'></script>
        <script type="text/javascript" src='js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
        <script src='js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js'></script>
        <script src='js/fullcalendar-2.1.1/fullcalendar.js'></script>
        <script src='js/fullcalendar-2.1.1/lang/en-au.js'></script>

        <script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
        <script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
		
<script type="text/javascript">
function resizeFont( object ) {
		//alert(object);
         
        var o = object;
        var p = $('p');
		var a = $('a');
		var h5 = $('h5');
         
        switch( o ) {
            case "Big"      : p.css('font-size',17),a.css('font-size',17),h5.css('font-size',17); break;
            case "Middle"   : p.css('font-size',14),a.css('font-size',14),h5.css('font-size',14); break;
            case "Small"    : p.css('font-size',10),a.css('font-size',10),h5.css('font-size',10); break; 
        }
         
}
$(document).ready(function(){
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
});
</script>
    <script type="text/javascript">
        function link(id){

            var link = document.getElementById("link"+id).value;
            window.location = link;

//$('ul.nav li.dropdown').hover(function() {
//$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
//}, function() {
//$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
//});
        }
    </script>
</head>

<body>

<!-- Navigation -->
	<?
	
		if ($_SESSION['levelid'] == "1") {
		echo "<nav class='adminBar'>
					<div class='container'>
						
						<div class='col-md-12 text-right'>
							<p>ยินดีต้อนรับคุณ ".$_SESSION['fname']." ".$_SESSION['lname']." <a href='function/logout.php'> ออกจากระบบ </a></p>
						</div>
					</div>
			</nav> <br clear='all'>";
	}
	?>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<div class="col-md-8">
					<a class="navbar-brand" href="index.php">
						<img src="../img/logo.png" style="width:100%;">
					</a>
				</div>
				<div class="col-md-4 text-right">
					<a class="" href="#"><img src="../img/i_twitter.png" style="width: 25px;"></a>
					<a class="" href="#"><img src="../img/i_facebook.png" style="width: 25px;"></a>
					<a class="" href="../writerss.php"><img src="../img/i_rss.png" style="width: 25px;"></a>
					
					<div class="mFont">  
						<!--<input type='button' value='Small'  />  
						<input type='button' value='Middle' />
						<input type='button' value='Big' /> -->
						<a href="#"><img src="../img/Small.png" onclick="resizeFont('Small')"></a>
						<a href="#"><img src="../img/Middle.png" onclick="resizeFont('Middle')"></a>
						<a href="#"><img src="../img/Big.png" onclick="resizeFont('Big')"></a>
						<a href="#"><img src="../img/thai.png" onclick="lang('Big')"></a>
						<a href="#"><img src="../img/eng.png" onclick="lang('Big')"></a>
					</div>  
				</div>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="width:100%">
				<?php
				$sql = "SELECT * FROM functions where active = 1";
				$objQuery = mysql_query($sql);
				//echo $sql;
					while ($row = mysql_fetch_array($objQuery)) {
						if($row['level'] == 1){
							echo "<li>
										<a href='".$row['function_uri']."'>
											<span class='th'>".$row['name']."</span>
											
										</a>
									</li>";

						}else if(($row['level'] == 2)){
							echo "<li class='dropdown'>
                                <input type='hidden' id = 'link".$row['function_id']."' name = 'link' value='".$row['function_uri']."'>
									<a href='".$row['function_uri']."' Onclick='link(".$row['function_id'].")' class='dropdown-toggle' data-toggle='dropdown'><span class='th' >".$row['name']."</span>
											<b class='caret'></b></a>
									<ul class='dropdown-menu'>";
										$sql1 = "SELECT * FROM functions where parent_id = ".$row['function_id']." and active = 1";
										$objQuery1 = mysql_query($sql1);
										//echo $sql;
											while ($row1 = mysql_fetch_array($objQuery1)) {
												echo "<li>
													<a href='".$row1['function_uri']."'>
														<span class='th'>".$row1['name']."</span>
														
													</a>
												</li>";
											}
							
							echo " 	</ul>
									</li>";
						}
						
					
				}

				?>
									<li>
										<a href='dashbord.php'>
											<span class='th'>จัดการทั้งหมด</span>
											
										</a>
									</li>
				
				</ul>
				
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
