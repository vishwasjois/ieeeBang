			<div id="footer">
				<div id="footer_left">
					<b>Contact:</b>
					<p> 
						ADDRESS<br>
						ADDRESS ADDRESS ADDRESS ADDRESS <br>
						ADDRESS ADDRESS<br>
						Phone: 1234-12345678
					</p>
				</div>
				<div id="footer_right">
					<p> 
						&copy; 2015-2016 <br> 
						Dhruv Agarwal<br>
						Suyash Shetty
					</p>
				</div>
			</div>
		</div>
		
		<!-----------------------------------------------------------Scripts------------------------------------------------------------>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$("#content").css({"height":($(window).height() - 100)+"px"});
				
				$(".boxer").attr("data-boxer-height", function(i,orig) {
					return $(window).height()-100;
				});
				if($(window).width()<500) {
					$(".boxer").boxer({
						mobile: true
					});
				}
				else
					$(".boxer").boxer();
				
				$(window).resize(function() {
					$("#content").css({"height":$(window).height() - 100});

					$(".boxer").attr("data-boxer-height", function(i,orig) {
						return $(window).height()-100;
					});
				});
				
				$("#navbar").naver();
				
				$(".edit").tipper();
				$(".delete").tipper();
				
			});
		</script>	
		
		<!-----------------------------------------------------------Scripts------------------------------------------------------------>
	</body>
	
</html>