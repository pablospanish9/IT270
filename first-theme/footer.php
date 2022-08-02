<footer>

	<div class="inner-footer">
		<h2>Tours of the Month</h2>

			<?php	dynamic_sidebar('sidebar-footer'); ?>

	</div>

	<div class="inner-footer">
		
	<ul>
		<li>Copyright &copy; <?php echo date('Y');?></li>
		<li>All Rights Reserved</li>
		<li><a href="https://gabsep5.wixsite.com/mysite" target="_blank"> Web Design by Pablo</a></li>
		<li><a href="https://validator.w3.org/check?uri=referer" target="_blank" rel="noopener">HTML VALID</a></li>
		<li><a href="https://jigsaw.w3.org/css-validator/check/referer"> 
			Valid CSS</a></li>		
	</ul>

	</div>


</footer>

    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
    </script>

	<?php wp_footer(); ?> 

</body>
</html>