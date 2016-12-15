<?  session_start();
	ob_start("ob_gzhandler");
	require_once('inc/connectDB.php');

	header("Content-Type: text/html; charset=utf-8");
	if($_SESSION['userid'] == "") {	
		
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
    <link href="css/doae.css" rel="stylesheet">

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
    <script src='js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script type="text/javascript" src='js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src='js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js'></script>
    <script src='js/fullcalendar-2.1.1/fullcalendar.js'></script>
    <script src='js/fullcalendar-2.1.1/lang/en-au.js'></script>

    <script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
    <script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
		
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
						<img src="img/logo.png" style="width:100%;">
					</a>
				</div>
				<div class="col-md-4 text-right">
					<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
					
					<a class="twitter-share-button" target="_blank" href="https://twitter.com/intent/tweet?text=<?=$url ?>"><img src="img/i_twitter.png" style="width: 25px;"></a>
					<a href="http://www.facebook.com/sharer.php?u=<?=$url ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><img src="img/i_facebook.png" style="width: 25px;"></a>
					<a class="" href="writerss.php"><img src="img/i_rss.png" style="width: 25px;"></a>
					
				
						<a href="#"><img src="img/Small.png" onclick="resizeFont('Small')"></a>
						<a href="#"><img src="img/Middle.png" onclick="resizeFont('Middle')"></a>
						<a href="#"><img src="img/Big.png" onclick="resizeFont('Big')"></a>
						<a href="#"><img src="img/thai.png" onclick="cmdThai()"></a>
						<a href="#"><img src="img/eng.png" onclick="cmdEng()"></a>
					
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
											<span class='en'>".$row['name_en']."</span>
										</a>
									</li>";
							
						}else if(($row['level'] == 2)){
							echo "<li class='dropdown'> 
            <input type='hidden' id = 'link".$row['function_id']."' name = 'link' value='".$row['function_uri']."'>
									<a href='#' class='dropdown-toggle' Onclick='link(".$row['function_id'].")' data-toggle='dropdown'>
										<span class='th'>".$row['name']."</span>
										<span class='en'>".$row['name_en']."</span>
											<b class='caret'></b></a>
									<ul class='dropdown-menu'>";
										$sql1 = "SELECT * FROM functions where parent_id = ".$row['function_id']." and active = 1";
										$objQuery1 = mysql_query($sql1);
										//echo $sql;
											while ($row1 = mysql_fetch_array($objQuery1)) {
												echo "<li>
													<a href='".$row1['function_uri']."'>
														<span class='th'>".$row1['name']."</span>
														<span class='en'>".$row1['name_en']."</span>
														
													</a>
												</li>";
											}
							
							echo " 	</ul>
									</li>";
						}
						
					
				}

				?>
				
				</ul>
				
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
