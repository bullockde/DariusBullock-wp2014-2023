<div class='clear'></div>
<section class='header members'>
		
		<div class='container'>
			
			<div class='row'>
			<div class='col-xs-6'>
				<h2>#SSIMembers</h2>
			</div>	
			<div class='col-xs-6'>
				<button id='members' class='btn btn-lg btn-default btn-section'>View / Hide</button>
			</div><div class='clear'></div>
			<hr>
		</div>
			
			
	<div id='members' style=' display: block;'>	
		<!--	<div class="col-sm-6">
				
				<a href='/register' class='btn btn-info btn-block'>Register Now</a>
			</div>
			<br class='visible-xs'>
			<div class="col-sm-6">
				
				<a href='/wp-admin' class='btn btn-info btn-block'>Login</a>
			</div>
		-->
			<div class='clear'></div>

			<div class="spotlight col-sm-4 text-center">
				
				<h3>Member <?php if( is_user_logged_in() ){ echo "Profile"; }else{ echo "Spotlight"; } ?></h3> 
				<?php

				if( is_user_logged_in() ){
				    $current_user = wp_get_current_user();
				 /**
				     * @example Safe usage: $current_user = wp_get_current_user();
				     * if ( !($current_user instanceof WP_User) )
				     *     return;
				     */

				?>

				<div class="staff">
				<div class="col-xs-5 col-md-4">
					
					<?php echo do_shortcode("[bp_profile_gravatar]"); ?>

				</div>
				<div class="col-xs-7 col-md-8 text-left">
	
					<b><?php echo '<h4>' . $current_user->user_login . '</h4>' ?></b>

					<?php
						bp_activity_latest_update($current_user->ID);

					?>
					
	
		

				</div>
					<div class='clear'></div>
				<div class='col-xs-12'>
					<?php if( is_user_logged_in() ){ ?>

				<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/change-avatar/' class='btn btn-default btn-block'>Update Profile Photo</a>
				<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/#subnav' class='btn btn-default btn-block'>Update My Status</a><br>
				<?php } ?>
				</div>	


				</div>


				<?php }else{ ?>
				<br>

			<div class=' '>
				<div class="staff">
				<div class="col-sm-3">
				
					<b><img class="alignleft size-full wp-image-412" src="http://shamanshawn.com/wp-content/uploads/2015/07/ac509a4a5a89227f78ad487a48fdc94f-bpfull.jpg" alt="ac509a4a5a89227f78ad487a48fdc94f-bpfull" width="150" height="150" />
				</div>
				<div class="col-sm-9 text-left">

					<b>Shaman Shawn - </b>CEO<br>

					<strong>Hometown:</strong>  Hampton, VA<br>

					<strong>Email:</strong> <a href="mailto:shawn@shamanshawn.com">shawn@shamanshawn.com</a><br>

					<strong>Favorite Food:</strong> Lasagna<br>
				</div>
					<div class='clear'></div>
					
				<a href='/shawn'><button class='btn btn-default btn-block'>View Profile</button></a>   

		
				</div>
	

			</div>
	<?php } ?>	
			</div>
			<div class="login col-sm-4">

				<?php if( !is_user_logged_in() ){ ?>
				<a href='/register/' class='btn btn-lg btn-info btn-block'>Register Now</a>

				<a href='/wp-admin/' class='btn btn-lg btn-info btn-block'>Login</a>
			<?php }else{ ?>

			  		<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/' class='btn btn-lg btn-info btn-block'>View My Profile</a>
				<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/edit/' class='btn btn-lg btn-info btn-block'>Edit My Profile</a>
				<a href='/activity/' class='btn btn-lg btn-info btn-block'>Member Activity</a>

				
			<?php } ?>

				

				<a href='/members/' class='btn btn-lg btn-info btn-block'>View All Members</a>

				
			</div>

			
			<div class="col-sm-4">		
			
				<h3>Member Activity</h3>
				<?php get_sidebar( 'content' ); ?>
			</div>
			
			</div><!--  #members  -->
		</div><!--  #container  -->
	</section>
<div class='clear'></div>