</div>
		<div id="footer">
			<div id="footer_left">
				<b>Contact:</b>
				<p> 
					Vishwas Jois<br>
					Phone: +91 9620619661
				</p>
			</div>
			<div id="footer_right">
				<p> 
					&copy; 2015-2016 <br> 
					Dhruv Agarwal<br>
					Bhavarth Chauhan<br>
					Suyash Shetty
				</p>
			</div>
		</div>

<!-- Javascript -->
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/init.js"></script>
<script>

$(document).ready( function(){

	var i = "50";

	$("a#resources").click( function(){
		$("div#overlay").show();
		$("div.menuList").not($("div#resourceList")).hide();

		if($("div#resourceList").css("display") == "none"){
			$("div#resourceList").slideDown();
		} else{
			$("div#resourceList").slideUp();
		}
	});

	$("a#links").click( function(){
		$("div#overlay").show();
		$("div.menuList").not($("div#linksList")).hide();

		if($("div#linksList").css("display") == "none"){
			$("div#linksList").slideDown();
		} else{
			$("div#linksList").slideUp();
		}
	})

	$("div#overlay").click( function(){
		$("div.menuList").hide();
		$("div#overlay").hide();
	});

	$("div#resourceList ul li").click( function(){
		
		$("div#overlay").show();

		$("div.subList").slideUp();

		if($("div#"+this["id"]+"Options").css("display") == "none"){
			$("div#"+this["id"]+"Options").slideDown();	
		}

	});

})

</script>
</body>
</html>
