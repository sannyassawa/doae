

	 <footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-2"><img src="img/logo_footer1.png" style="width: 100%;" ></div>
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-12">
										<img src="img/logo_footer2.png" style="width: 100%;" >
									</div>
									<div class="col-md-5"><p>กรมส่งเสริมการเกษตร กระทรวงเกษตรและสหกรณ์</p></div>
									<div class="col-md-3"><p>โทรศัพท์ : 02-5790121-27</p></div>
									<div class="col-md-4"><p>อีเมล์ : servicelink@doae.go.th</p></div>
								</div>
								
								
							</div>
						
							
						</div>
					</div>
					<div class="col-md-3 text-right">
						<div class="row">
							<p><a class="" href="contact_detail.php?Id=3">แผนผังเว็บไซต์ </a>| <a class="" href="contact_detail.php?Id=2">แผนที่ </a>|<a class="" href="contact_detail.php?Id=1"> ติดต่อเรา</a></p>
							<p><a class="" href="contact_detail.php?Id=4">การปฏิเสธความรับผิดชอบ</a></p>
							<p><a class="" href="contact_detail.php?Id=5">นโยบายเว็บไซต์ </a></p>
							<p><a class="" href="contact_detail.php?Id=6">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a></p>
							<p><a class="" href="contact_detail.php?Id=7">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์ </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	

	<input type="hidden" name="sesstion_id" id="sesstion_id" class="sesstion_id" value="<?=$_SESSION['userid'] ?>" >

    
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

    <!-- Script to Activate the Carousel -->
    <script>
	$(document).ready(function(){
		$(".en").hide();	
		
		if($(".sesstion_id").val() == 0){
			$(".adminDiv").remove();	
		}else{
			
		}
			
	
	});
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	function cmdEng(){
		$(".th").hide();
		$(".en").show();
	}
	function cmdThai(){
		$(".th").show();
		$(".en").hide();
	}
	
    </script>
</body>
</html>