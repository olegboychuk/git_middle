<?php require_once dirname( __FILE__ ) . "/includes/header.php"; ?> 
	<div id="profile-page">
		<div class="wrapper">
			<div id="cover">
				<img src="images/26569114.jpg" height="800" width="1280">
				<div id="profile-data">
					<div id="profile-img">
						<img src="images/default-img.jpg">
					</div>
					<div id="profile-username">Username<?php //$username ?></div> 
				</div>
			</div>

			<div id="left-content">
				<div id="profile-update-status">
					<div id="profile-update-status-info">
						<div id="profile-update-status-img"><img src="images/default-img.jpg" height="30" width="30"></div>
						<p><?php// $username ?>Update youre status</p>
					</div>	
					<textarea placeholder="What's on youre mind?"></textarea>
					<div id="button-post"><button>Post</button></div>
				</div>
				<div id="statuses-by-home"></div>
			</div>
			
			<div id="user-info">
				<div id="profile-settings-info">
					<h2>About <a href=""> (Edit)</a></h2>
					<div class="profile-some-settings-info">
						<p><a href="#">My Friends (<?php // $friends ?>)</a></p>
					</div>	
				</div>

				<div id="profile-postsByTime-info">
					<h2>Posts By Time</h2>
					<div class="profile-posts-info">
						<p><a href="#">All Posts</a></p>
						<p><a href="#">June - 2015</a></p>
					</div>	
				</div>
			</div>
		</div>
	</div>	

<?php require_once dirname( __FILE__ ) . "/includes/footer.php"; ?> 