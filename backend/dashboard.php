
<?php include 'session/session.php';?>
<?php include 'dashboad_location/dashboard_header.php'; ?>

	<div class="content_right clear" style="padding:10px 15px;">
		<div class="content clear">
			<article>
                <h2>
                    Welcome <?php echo $_SESSION['your_name']; ?><br>
                    <span> Your Email is <a href="#"><?php echo $_SESSION['your_email']; ?></a></span>
                </h2>	
			</article>
	 	</div>
	</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
