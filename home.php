// <?php require_once dirname( __FILE__ ) . "/core/Authentication.class.php"; 
// $ses= new Authentication();
// $ses->isLogedIn();
// var_dump($ses);?>
<?php require_once dirname( __FILE__ ) . "/includes/header.php"; ?> 
	<div id="home-page">
		<div class="wrapper">
			<div id="left-content">
				<div id="home-update-status">
					<div id="home-update-status-info">
						<div id="home-update-status-img"><img src="images/default-img.jpg" height="30" width="30"></div>
						<p><?php// $username ?>Update youre status</p>
					</div>	
					<textarea placeholder="What's on youre mind?"></textarea>
					<div id="button-post"><button>Post</button></div>
				</div>
				<div id="statuses-by-home"></div>
			</div>
			<div id="user-info">
				<div id="wellcome-info">
					<h2>Wellcome</h2>
					<div class="some-info">	
						<div id="wellcome-info-img"><img src="images/default-img.jpg"></div>
						<p><?php // $username ?></p>
						<p><a href="#">Edit Profile</a></p>
					</div>	
				</div>
				<div id="my-details-info">
					<h2>My Details</h2>
					<div class="some-info">
						<p>Full name<?php // Full name?></p>
						<p>Birthday<?php // Birthday date ?></p>
						<p>Email<?php // Mail ?></p>
					</div>	
				</div>
				<div id="my-friends-info">
				<input type="button" value="get friends" id="getFriends">
					<h2>My Friends <?php //count friends ?></h2>
					<div id="friends">

					</div>
				</div>
			</div>
		</div>	
	</div>	
<?php require_once dirname( __FILE__ ) . "/includes/footer.php"; ?> 
