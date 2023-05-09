<?php 
	$user = wp_get_current_user();
		$allowed_roles = array('editor', 'administrator');
	if ( is_user_logged_in() && array_intersect($allowed_roles, $user->roles ) ) { // LOGGED-IN Check


		echo "<div class='container'>";
		echo "<br><br><div class='clear'></div>";

	?>

		<div class='row'>
			<div class='col-xs-6'>

				<?php
				the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
				?>
			</div>	
			<div class='col-xs-6'>
				<button id='newtrans' class='btn btn-lg btn-default pull-right'>New Transaction</button>
				<button id='filter' class='btn btn-lg btn-default pull-right'>Filter</button>
				
			</div><div class='clear'></div>
			<hr>

			<?php get_template_part( 'content', 'filter' ); ?>


			<?php 
				$start_date = 9999;

				if( isset( $_GET['start_date'] ) ){ $start_date = $_GET['start_date']; }
			?>
		</div>

		<div id='newtrans' class='clear' style='display: none;'>
				<form id='inert_transaction' method='post'>
		<div class='col-md-2'><input type="date" name="trans_date"></div>
		<div class='col-md-2'><input type="text" name="client_name" placeholder="Name"></div>
		<div class='col-md-2'><input type="text" name="client_phone" placeholder="Phone"></div>
		<div class='col-md-2'><input type="text" name="client_city" placeholder="City"></div>
		<div class='col-md-2'><input type="text" name="client_state" placeholder="State"></div>
		<div class='col-md-1'><input type="text" name="trans_amount" placeholder="Rate"></div>

		<div class='clear'></div><hr>

		<div class='col-sm-1' ><input type="text" name="area_code" placeholder="Area"></div>
		<div class='col-sm-2' ><input type="text" name="last_seen" placeholder="Last Seen"></div>
		<div class='col-sm-2' ><input type="text" name="last_contacted" placeholder="Last Contacted"></div>
		<div class='col-sm-2' ><input type="text" name="post_date" placeholder="Added"></div>
		<div class='col-sm-3' ><input type="text" name="notes" placeholder="Notes"></div>

		<input type='hidden' name='insert_transaction' value='true'>
		<input type='hidden' name="update" value='true'>
		<div class='col-md-1'><input type="submit" value="Add"></div><br>
		<div class='clear'></div>
	</form>
			<hr>

			

		</div><!--  #END Transaction  -->

			
	
			<div class='col-md-2'><h2>Date</h2></div>
		<div class='col-md-2'><h2>Name</h2></div>
		<div class='col-md-2'><h2>Phone#</h2></div>
		<div class='col-md-2'><h2>City</h2></div>
		<div class='col-md-2'><h2>State</h2></div>
		<div class='col-md-2'><h2>Details</h2></div><br>
		<div class='clear'></div>
			<hr>


		<?php
			/*********************************************************/


			// The Query

			$args = array( 

				'post_type' => 'transactions',
				'posts_per_page' => -1

			 );
			$leads = get_posts( $args );


			/* VARIABLES
			**********************************************/
			
			$trans_count = 0;

			$tot_trans = count($leads);
			$tot_income = 0;
			$tot_expense = 0;
			
			$start_date = '-' . $start_date . ' days';


			
			//print_r( $leads );
			foreach( $leads as $lead ){

				$today = strtotime('today');
				$today_end = strtotime('tomorrow');
				$date = '03/12/2015'; #could be (almost) any string date

				//echo '--->' . '-' . $start_date . ' days' . ' *** ' . date("m-d-Y", strtotime( $start_date ));

				$date_timestamp = strtotime($date);

				if ( strtotime( $lead->post_date ) < strtotime( $start_date ) ) {
					#$date occurs today
					break;
				} else if ($date_timestamp < $today_start) {
				    #$date occurs before today
				} else {
				    #$date occurs today
				}
 				
				$trans_count++;
				$public = 1;
				
				$client_id = 0;
				
				$confirmed = false;
				
				if( get_field( 'client_id', $lead->ID ) ){
					echo "Client ID: " . get_field( 'client_id', $lead->ID );
					$confirmed = true; $client_id = get_field( 'client_id', $lead->ID );
					echo "<br>";
				}else{

				?>
					<form method='post' action='' name='insert_client'>
						<input name="date_added" type="hidden" value="<?php echo $lead->post_date; ?>" />
						<input name="ID" type="hidden" value="<?php echo $lead->ID; ?>" />
						<input name="client_name" type="hidden" value="<?php echo $lead->post_title; ?>" />
						<input name="client_phone" type="hidden" value="<?php echo get_field( 'trans_phone', $lead->ID ); ?>" />
						<input name="client_city" type="hidden" value="<?php echo get_field( 'trans_city', $lead->ID ); ?>" />
						<input name="client_state" type="hidden" value="<?php echo get_field( 'trans_state', $lead->ID ); ?>" />
						<input name="trans_date" type="hidden" value="<?php echo mysql2date('n/j/y', $lead->post_date );  ?>" />
						<input name="trans_amount" type="hidden" value="<?php echo get_field( 'trans_amount', $lead->ID ); ?>" />
						<input name="trans_time" type="hidden" value="<?php echo get_field( 'trans_time', $lead->ID ); ?>" />
						<input name="trans_service" type="hidden" value="<?php echo get_field( 'trans_service', $lead->ID ); ?>" />
						<input name="trans_location" type="hidden" value="<?php echo get_field( 'trans_location', $lead->ID ); ?>" />

						<input name="URI" type="hidden" value="<?php echo get_page_link(); ?>" />
						<input type='hidden' name='insert_client' value='true'>
						
						<input type="hidden" name="cur_post_type" value='clients'>
						<input type="hidden" name="update" value="true">
						<input type='submit' value='Insert Client'>
					</form>
				<?php

					echo "<br>";
				}
				

				if(  get_field( 'public_private_request', $lead->ID ) == 0  ||  is_user_logged_in()  ){ 
					if( $lead->post_status == 'publish' ){
					?>
					
					<div class='col-md-2'> 
					
						<?php echo mysql2date('n/j/y', $lead->post_date ); 

							if( $trans_count == $tot_trans ){
								$start_date = mysql2date('n/j/y', $lead->post_date );
							} 
						?>
					</div>
					<div class='col-md-2'> 

						<?php echo "-"; ?>
						<?php 
							if	( $confirmed )		{ echo get_the_title( $client_id ); }
							elseif	( $lead->post_title )	{ echo $lead->post_title; }
							else				{ echo 'New Request'; }
						 ?>
						<?php  ?>
					</div>
					
					<div class='col-md-2'>
						
						<?php echo "-";  ?>

						<?php 
							if( $confirmed )	{ echo get_field( 'lead_phone', $client_id ); }
							else			{ echo get_field( 'trans_phone', $lead->ID ); }
						 ?>
					</div>
					<div class='col-md-2'>

						<?php echo "-"; ?>
						<?php 
							if( /*$confirmed*/ 0 )	{ echo get_field( 'lead_city', $client_id ); }
							else			{ echo get_field( 'trans_city', $lead->ID ); }
						 ?>
					</div>
					<div class='col-md-2'>

						<?php echo "-"; ?>
						<?php echo get_field( 'trans_state', $lead->ID ); ?>

					</div>
					<div class='col-md-1'>

						<?php

							if( get_field( 'income_expense', $lead->ID ) == '-' ){ 

				echo "- "; 

				$tot_expense += get_field( 'trans_amount', $lead->ID );
				$trans_total = $trans_total - get_field( 'trans_amount', $lead->ID );

			}else{  

				echo "+ ";  

				$tot_income += get_field( 'trans_amount', $lead->ID );
				$trans_total = $trans_total + get_field( 'trans_amount', $lead->ID );

			}
				?>

						
						<?php echo "$"; ?>
						<?php echo get_field( 'trans_amount', $lead->ID ); ?>
						
					</div>
					<div class='col-md-1'>

						
						<button id='details<?php echo $lead->ID; ?>' class='btn btn-default btn-block'>View</button>
					</div>
					
					

				<?php

					echo "<br><br><div id='details" . $lead->ID .  "' class='details' style='display: none;'>";


					?>

					
					<div class='col-md-2 hide'>
						
						<?php echo "-"; ?>
						<?php echo get_field( 'trans_email', $lead->ID ); ?>

					</div>

					<?php
					/*if( $lead["2.3"] ){
					echo "<b>Location: </b> " . $lead["2.3"] . ", " . $lead["2.4"] . " " . $lead["2.5"] . "<br><br>";
					}else	{
					echo "<b>Location:</b> Philadelphia, PA<br>";
					}*/


					echo "<div class='col-xs-4' ><b>Time: </b> " . get_field( 'trans_time', $lead->ID ) . "</div>"; 
					echo "<div class='col-xs-4' ><b>Location: </b> " . get_field( 'trans_location', $lead->ID ) . "</div>"; 
					echo "<div class='col-xs-4' ><b>Service: </b> " . get_field( 'trans_service', $lead->ID ) . "</div>"; 

					echo "<div class='clear'></div><br>"; 

					echo "<div class='col-xs-12' ><b>Note: </b> " . $lead->post_content . "</div>";
					
				?>
					<form class='update hidden' action='' method="post">
						Client ID:<input type='text' name='client_id'>
						<input name="ID" type="hidden" value="<?php echo $lead->ID; ?>" />
						<input type='hidden' name='updater' value='true'>
						<input type='hidden' name="update" value='true'>
						<input type='submit' name="update" value='Submit'>
					</form>
				<?php
					echo "<div class='clear'></div><br>";
					echo "<a target='_blank' href='/wp-admin/post.php?post=" . $lead->ID . "&action=edit' class='btn btn-default'>Edit Transaction</a>";

					echo "<br></div><div class='clear'></div><hr>";
					//print_r( $lead );
					//echo "<hr>";
					}// #END IF Published
				}else{  echo "Private<hr><br>" ; } 
					
				}
				echo "<br><br>";
				//print_r( $leads );
	

				echo "TRANSACTION SUMMARY<hr>";
				
				echo $trans_count . "  Transactions Since: " . str_replace( "-", "", $start_date ) /* . "ago"*/;
				echo "<br><br>INCOME---> $" . $tot_income; 
				echo "<br><br>EXPENSE--> $" . $tot_expense; 
				echo "<br><br>PROFIT---> $" . ($tot_income - $tot_expense); 

				echo "<br><br>";
			// Reset Query
			wp_reset_query();


/*********************************************************/


		echo "</div>";

} //END LOGGED-IN Check
?>
