<?php		

		$user = wp_get_current_user();
		$allowed_roles = array('editor', 'administrator');
	if ( is_user_logged_in() && array_intersect($allowed_roles, $user->roles ) ) {

		wp_reset_postdata();
		//$args = array(  'category_name' => 'songs-that-touch-the-soul' , 'posts_per_page' => -1);

		//$fix_count = 0;

		//$myposts = get_posts( $args );

		

		/*foreach ( $myposts as $post ) : setup_postdata( $post ); 
			if(!get_field('youtube_id')){ $fix_count++; }
		endforeach; 

		wp_reset_postdata();
		*/
		//$leads1 = GFFormsModel::get_leads( '11' );
		//$leads2 = GFFormsModel::get_leads( '8' );

		$to_dos = get_posts( array( 'post_type' => 'to_do', 'posts_per_page' => -1 ) );
		$requests = get_posts( array( 'post_type' => 'request', 'posts_per_page' => -1 ) );
	?>
<div class='container'>
	
	<h1>Admin Area</h1>
	<hr>
		<div class='col-md-4'>
			<h3>Contact Book:</h3><hr>

			<b>Contacts (All):</b><span class='alignright'><a target='_blank' href='/admin/contacts/'>Click Here</a></span><br>
			<b>Clients:</b><span class='alignright'><a target='_blank' href='/admin/clients/'>Click Here</a></span><br>
			<b>Friends:</b><span class='alignright'><a target='_blank' href='/admin/friends/'>Click Here</a></span><br>		
			<b>Leads:</b><span class='alignright'><a target='_blank' href='/admin/leads/'>Click Here</a></span><br>
			<b>Tenants:</b><span class='alignright'><a target='_blank' href='/admin/tenants/'>Click Here</a></span><br>
			<b>Family:</b><span class='alignright'><a target='_blank' href='/admin/family/'>Click Here</a></span><br>
			
			<br><br>
			<h3>Staff Tools</h3><hr>	

			<b>Jobs:</b><span class='alignright'><a target='_blank' href='/jobs/'>Click Here</a></span><br>
			<b>Requests: <?php echo count( $requests ); ?></b><span class='alignright'><a target='_blank' href='/request/'>Click Here</a></span><br>
	
			
			
			<b>Newsletter:</b><span class='alignright'><a target='_blank' href='/newsletter/'>Click Here</a></span><br>
			<b>Passwords: </b><span class='alignright'><a target='_blank' href='/passwords/'>Click Here</a></span><br>
			<b>To Do's: <?php echo count( $to_dos ); ?> </b><span class='alignright'><a target='_blank' href='/admin/to-do/'>Click Here</a></span><br>
		
	
			<b>Upload: </b><span class='alignright'><a target='_blank' href='/upload/'>Click Here</a></span><br>

			<b>Notes: </b><span class='alignright'><a target='_blank' href='/admin/notes/'>Click Here</a></span><br>


			<br>
			
			
		</div>

		<div class='col-md-4'>
			
			<h3>#SSIStats/Admin</h3><hr>


			<b>Trips:</b><span class='alignright'><a target='_blank' href='/admin/trips/'>Click Here</a></span><br>
			<b>Transactions:</b><span class='alignright'><a target='_blank' href='/admin/transactions/'>Click Here</a></span><br>
			<b>Google Ads:</b><span class='alignright'><a target='_blank' href='https://www.google.com/adsense/'>Click Here</a></span><br>
			<b>Juicy Ads:</b><span class='alignright'><a target='_blank' href='http://www.juicyads.com/'>Click Here</a></span><br>
			<b>ExoClick Ads:</b><span class='alignright'><a target='_blank' href='http://www.exoclick.com/'>Click Here</a></span><br>
			<b>Google Analytics:</b><span class='alignright'><a target='_blank' href='https://www.google.com/analytics/web/'>Click Here</a></span><br>

			<h3>Webmaster Tools:</h3><hr>
			<b>GoDaddy:</b><span class='alignright'><a target='_blank' href='https://www.godaddy.com/'>Click Here</a></span><br>
			<b>Linode:</b><span class='alignright'><a target='_blank' href='https://www.linode.com/'>Click Here</a></span><br>	
			<b>SendGrid:</b><span class='alignright'><a target='_blank' href='https://app.sendgrid.com/'>Click Here</a></span><br>
			<b>SMS Global:</b><span class='alignright'><a target='_blank' href='https://mxt.smsglobal.com/login/'>Click Here</a></span><br>
			
			
			
			
		</div>


		<div class='col-md-4'>
			<h3>Quick Links</h3><hr>
			
			<b>FaceBook:</b><span class='alignright'><a target='_blank' href='https://www.facebook.com/ShamanShawnInc/'>Click Here</a></span><br>
			<b>Twitter:</b><span class='alignright'><a target='_blank' href='https://twitter.com/shamanshawninc'>Click Here</a></span><br>
			<b>Adam4Adam:</b><span class='alignright'><a target='_blank' href='http://www.adam4adam.com/'>Click Here</a></span><br>
			<b>BGCLive:</b><span class='alignright'><a target='_blank' href='http://bgclive.com/'>Click Here</a></span><br>
			<b>InstaGram:</b><span class='alignright'><a target='_blank' href='https://instagram.com/'>Click Here</a></span><br>
			
			<b>LinkedIn:</b><span class='alignright'><a target='_blank' href='https://www.linkedin.com/pub/shaman-shawn/53/296/58b'>Click Here</a></span><br>
			<b>Youtube:</b><span class='alignright'><a target='_blank' href='https://www.youtube.com/channel/UChPquIqMjch7rEcoSnmN_AA'>Click Here</a></span><br>
			<b>MeetUp:</b><span class='alignright'><a target='_blank' href='http://www.meetup.com/TreatYourselfMassage/'>Click Here</a></span><br>
			<b>Rent A Friend:</b><span class='alignright'><a target='_blank' href='http://rentafriend.com/'>Click Here</a></span><br>
			<b>Seeking Arrangement:</b><span class='alignright'><a target='_blank' href='https://www.seekingarrangement.com/'>Click Here</a></span><br>
			<b>Air BnB:</b><span class='alignright'><a target='_blank' href='https://www.airbnb.com/'>Click Here</a></span><br>



			<br>



			<h3> Sites </h3><hr>
			<b>Shaman Shawn Inc:</b><span class='alignright'><a target='_blank' href='http://www.shamanshawn.com/'>Click Here</a></span><br>

			<b>Treat Yourself Massage:</b><span class='alignright'><a target='_blank' href='http://www.treatyourselfmassage.com/'>Click Here</a></span><br>

			<b>InstaFliXXX:</b><span class='alignright'><a target='_blank' href='http://instaflixxx.com/'>Click Here</a></span><br>

			<b>Cortiva Crew:</b><span class='alignright'><a target='_blank' href='http://cortivacrew.com/'>Click Here</a></span><br>

			<b>Iconic Revlon:</b><span class='alignright'><a target='_blank' href='http://iconicrevlon.com/'>Click Here</a></span><br>

			<b>He Got It Maid:</b><span class='alignright'><a target='_blank' href='http://hegotitmaid.com/'>Click Here</a></span><br>

			<b>She Got It Maid:</b><span class='alignright'><a target='_blank' href='http://shegotitmaid.com/'>Click Here</a></span><br>

			
			<b>Taste Or Torch:</b><span class='alignright'><a target='_blank' href='http://tasteortorch.com/'>Click Here</a></span><br>

			<b>Express It Daily:</b><span class='alignright'><a target='_blank' href='http://www.expressitdaily.com/'>Click Here</a></span><br>
			
			
		</div>
		

		
</div>
		<br><br><br><br><br>
	<?php

	}


?>