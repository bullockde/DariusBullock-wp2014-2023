<div class='clear'></div>
<section id='welcome1' class='welcome' style='display:block;'>

<?php 
	if( is_user_logged_in() ){
		$current_user = wp_get_current_user();
	}
?>

<div class='container'>
		<h1><b><?php if( is_user_logged_in() ){  echo 'Welcome Back, ' . $current_user->user_login . '!'; }else{ echo "Welcome to Shaman Shawn Inc.";}  ?></b></h1>


		<div class='clear'></div>
		<?php if( is_user_logged_in() ){ ?>
		<div class="spotlight col-md-4 text-center">

			<!-- <h3>Member <?php if( is_user_logged_in() ){ echo "Profile"; }else{ echo "Spotlight"; } ?></h3> -->
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
				
					<b><?php //echo '<h4>' . $current_user->user_login . '</h4>' ?></b>

					<?php	bp_activity_latest_update($current_user->ID);  ?>

					<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/#subnav' class='status btn btn-default btn-sm pull-right'>Update</a>

				</div>
				<div class='clear'></div>

			</div>

			<?php } ?>
			
			 <a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/change-avatar/'><button class='btn btn-info btn-block'>Update Profile Photo</button></a>

				<button id='profilemenu' class='btn btn-info btn-block'>Profile Menu</button>

				<div id='profilemenu' class="profilemenu" style="display: none;">

					<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/' class='btn btn-lg btn-info btn-block'>View My Profile</a>
						<a href='/members/<?php $current_user = wp_get_current_user(); echo  $current_user->user_login;  ?>/profile/edit/' class='btn btn-lg btn-info btn-block'>Edit My Profile</a>


				</div>

				<button id='whatsnew' class='explode btn btn-danger btn-block'>Random Button</button>
				
		</div>
		
		<?php } ?>



			<div class='col-md-8'>

				<div id='whatsnew'>

					<div class='new-tag visible-xs'><h3>What's New:</h3></div>

					<a href='/tv/'><span class='learnmore'>Click to Learn More</span><img src="/wp-content/uploads/2015/10/SSITV.png"  alt='SSITV' class='img-responsive' /></a> 
				<div class="flexslider11 hidden">
					
					<ul class="slides">
						<li>
							<a href='/playlist/'><span class='learnmore'>Click to Learn More</span><img src="/wp-content/uploads/2015/09/SSIPlaylist-e1445057287376.png" class='img-responsive'/></a>

						</li>
						<li>
							<a href='/the-real-house-staff-of-shaman-shawn-season-premiere-trailer-1-hour-ssi/'><span class='learnmore'>Click to Learn More</span><img src="/wp-content/uploads/2015/10/RHSoSSI-leader.png" class='img-responsive' /></a>


						</li>
						<li>
							<a href='/tv/'><span class='learnmore'>Click to Learn More</span><img src="/wp-content/uploads/2015/10/SSITV.png" /></a>

						</li>
					</ul>
				</div>

				<!-- <center><small><< Swipe || Click >></small></center>   -->
				</div><!-- #whatsnew -->
				
				<div id='whatsnew' class='random' style='display: none;'>
		<?php
				query_posts(array('orderby' => 'rand', 'showposts' => 1));
				if (have_posts()) :
				while (have_posts()) : the_post(); 
		?>
				
				<div class='text-center'>
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			

				<?php
					$format = get_post_format( get_the_ID() );

					if( $format == 'video' || in_category( 'music' , get_the_ID() ) || in_category( 'songs-that-touch-the-soul' , get_the_ID() ) ){
					get_template_part( 'content', 'video' );
					}else{
					the_content(); 
					}
				?>
				</div>

	<?php endwhile;
		endif; ?>
		</div>
		
			</div>	<!-- #new -->
								
								
							
		<?php if( !is_user_logged_in() ){ ?>

		<div class='visible-xs'><br></div>
		<div class='col-md-4 spotlight'>
			
			<h3><a href='/members/'>#SSIMembers</a></h3>

			<?php if( !is_user_logged_in() ){ ?>
				
				<div id='loginform'>
					<a href='/register/' class='btn btn-lg btn-info btn-block'>Register Now</a>

					<button id='loginform' class='random btn btn-lg btn-info btn-block'>Login</button>

					<button id='whatsnew' class='random btn btn-lg btn-danger btn-block'>Random Button</button>
				</div>

				<div id='loginform' class=' ' style='display: none;'>
					<?php wp_login_form(); ?>
					
				</div> 
					<?php }else{ ?>
					<a href='/activity/' class='btn btn-lg btn-info btn-block'>Member Activity</a><br>

						<a href='/members/' class='btn btn-lg btn-info btn-block'>View All Members</a><br>
					<?php } ?>

		</div><!--  #members  -->
		<?php } ?>
		<div class='clear'></div>
</div><!--  #Container  -->
							<br><br>
							<?php get_template_part( 'content', 'ssi-banner-ad' ); ?>
</section>
<div class='clear'></div>