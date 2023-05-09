<div class="clear"></div>

<section class='social'>
		
	<div class='container'>
		
		<div class='row'>
			<div class='col-xs-6'>
				<h2>#SSISocial</h2>
			</div>	
			<div class='col-xs-6'>
				<button id='social' class='btn btn-lg btn-default btn-section'>View / Hide</button>
			</div><div class='clear'></div>
			<hr>
		</div>
			
			
	<div id='social' style=' display: block;'>


			<div class="col-lg-4 hidden-xs text-center">
			<?php if ( !wp_is_mobile() ) { ?>
				<div class="fb-page" data-href="https://www.facebook.com/ShamanShawnInc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ShamanShawnInc"><a href="https://www.facebook.com/ShamanShawnInc">Shaman Shawn Inc.</a></blockquote></div></div>
			<?php } ?>
			
			</div>
			<div class="col-lg-4 text-center">
				<div class="col-lg-12">
				<div class='visible-xs visible-sm visible-md'><br></div><div class='visible-xs'><br></div>
				<center>
				Click Below to Find Out:<br>
				<a href='http://shamanshawn.com/wwss/'>Where in the World is Shaman Shawn?</a>
				</center><hr>
				<div class="col-xs-2 pad0"><a target='_blank' href='https://www.facebook.com/ShamanShawnInc/'><img src='/wp-content/uploads/2015/09/icon-facebook.png' class='img-responsive aligncenter'></a></div>
				<div class="col-xs-2 pad0"><a target='_blank' href='https://twitter.com/shamanshawninc'><img src='/wp-content/uploads/2015/09/icon-twitter.png' class='img-responsive aligncenter'></a></div>
				<div class="col-xs-2 pad0"><a target='_blank' href='https://www.youtube.com/channel/UChPquIqMjch7rEcoSnmN_AA'><img src='/wp-content/uploads/2015/09/icon-youtube.png' class='img-responsive aligncenter'></a></div>
				<div class="col-xs-2 pad0"><a target='_blank' href='https://www.linkedin.com/pub/shaman-shawn/53/296/58b'><img src='/wp-content/uploads/2015/09/icon-linked-in.png' class='img-responsive aligncenter'></a></div>
				<div class="col-xs-2 pad0"><a target='_blank' href='http://www.meetup.com/TreatYourselfMassage/'><img src='/wp-content/uploads/2015/10/icon-meetup-sqr.png' class='img-responsive aligncenter'></a></div>
				<div class="col-xs-2 pad0"><a target='_blank' href='https://vine.co/u/1239114165760024576'><img src='/wp-content/uploads/2015/10/vine-icon_340.png' class='img-responsive aligncenter'></a></div>

				</div>
				<div class='clear'></div>
		
				<hr>
				<?php get_sidebar( 'footer' ); ?>

			
				
				<div class='col-sm-4'>
					<a href='/register/' class='btn btn-lg btn-info btn-block'>SignUp</a><br>
				</div>
				<div class='col-sm-4'>

					<?php if(is_user_logged_in()){ ?>

						<a href='/wp-login.php?action=logout&_wpnonce=b48f0b370d&redirect_to=http%3A%2F%2Fshamanshawn.com%2Fwp-admin%2Ftheme-editor.php%3Ffile%3Dcontent-social.php%26loggedout%3Dtrue%23038%3Btheme%3Dtwentyfourteen%26%23038%3Bscrollto%3D954%26%23038%3Bupdated%3Dtrue' class='btn btn-lg btn-info btn-block'>Logout</a><br>
					
					<?php }else{ ?>
						<a href='/wp-admin/' class='btn btn-lg btn-info btn-block'>Login</a><br>
					
					<?php } ?>
				</div>
				<div class='col-sm-4'>
					<a href='/' class='btn btn-lg btn-info btn-block'>Home</a><br>
				</div>

			</div>
			<div class="col-lg-4 hidden-xs text-center">
			<?php if ( !wp_is_mobile() ) { ?>
				<a class="twitter-timeline" href="https://twitter.com/ShamanShawnInc" data-widget-id="643739182595227648">Tweets by @ShamanShawnInc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<?php } ?>
			</div>
		</div><!-- #social -->
	</div><!-- #container -->
	
	</section>


<div class="clear"></div>