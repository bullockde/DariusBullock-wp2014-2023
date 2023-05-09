<section id='current' class='current'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-6'>
				<h2>Current Projects</h2>
			</div>	
			<div class='col-xs-6'>
				<button id='current' class='btn btn-lg btn-default btn-section'>View / Hide</button>
			</div><div class='clear'></div>
			<hr>
		</div>
	<div id='current' class=''>


<!--	
		<div class='col-md-4'>
			<h3> Professional </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Personal </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Community </h3><hr>


		</div>
-->
	<div class='sites'>
		
		<?php 
			// check if the repeater field has rows of data
			if( have_rows('current_projects') ):

			 	// loop through the rows of data
			    while ( have_rows('current_projects') ) : the_row();
		?>

		<div class='row'>
			<div class='col-xs-6'><a href='<?php  the_sub_field('link'); ?>'><?php  the_sub_field('name'); ?></a></div>
			<div class='col-xs-6 text-right'><button id='<?php  the_sub_field('slug'); ?>'>View More</button></div>
			<div class='clear'></div>

			<div id='<?php  the_sub_field("slug"); ?>' class=' ' style='display: none;'>


		<div class='row'>
			<div class='col-md-6'>
				<img class='img-responsive' src='<?php  the_sub_field("image"); ?>'>
			</div>
			<div class='col-md-6'>
				<?php  the_sub_field("description"); ?>
			</div>
		<div class='clear'></div>
		</div>

		<div class='row hide'>
			<div class='col-md-4'>
				test
				<b>Start Date: </b><?php the_field("start_date"); ?><br><br>
				<b>Length: </b><?php the_sub_field("project_length"); ?><br><br>
				<b>Target Date: </b><?php the_sub_field("target_finish_date"); ?><br><br>
			</div>
			<div class='col-md-4'>
				test
				
				<?php the_sub_field("project_goals"); ?>
				
			</div>
			<div class='col-md-4'>
				test
				
			</div>
		<div class='clear'></div>
		</div>


			</div>
		
		</div>
			        
     			 


		<?php
  			  endwhile;

			else :

  		 		 // no rows found

			endif;

		?>
		
	</div><!-- #sites -->
	</div><!-- #current -->
	</div><!-- #container -->
	</section>

	<section id='future' class='future'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-6'>
				<h2> Future Projects </h2>
			</div>	
			<div class='col-xs-6'>
				<button id='future' class='btn btn-lg btn-default btn-section'>View / Hide</button>
			</div><div class='clear'></div>
			<hr>
		</div>
	<div id='future' class='sites'>

		<?php 
			// check if the repeater field has rows of data
			if( have_rows('future_projects') ):

			 	// loop through the rows of data
			    while ( have_rows('future_projects') ) : the_row();
		?>

		<div class='row'>
			<div class='col-xs-6'><a href='<?php  the_sub_field('link'); ?>'><?php  the_sub_field('name'); ?></a></div>
			<div class='col-xs-6 text-right'><button id='<?php  the_sub_field('slug'); ?>'>View More</button></div>
			<div class='clear'></div>

			<div id='<?php  the_sub_field("slug"); ?>' class=' ' style='display: none;'>


		<div class='row'>
			<div class='col-md-6'>
				<img class='img-responsive' src='<?php  the_sub_field("image"); ?>'>
			</div>
			<div class='col-md-6'>
				<?php  the_sub_field("description"); ?>
			</div>
		<div class='clear'></div>
		</div>

		<div class='row hide'>
			<div class='col-md-4'>
				test
				<b>Start Date: </b><?php the_field("start_date"); ?><br><br>
				<b>Length: </b><?php the_sub_field("project_length"); ?><br><br>
				<b>Target Date: </b><?php the_sub_field("target_finish_date"); ?><br><br>
			</div>
			<div class='col-md-4'>
				test
				
				<?php the_sub_field("project_goals"); ?>
				
			</div>
			<div class='col-md-4'>
				test
				
			</div>
		<div class='clear'></div>
		</div>


			</div>
		
		</div>
			        
     			 


		<?php
  			  endwhile;

			else :

  		 		 // no rows found

			endif;

		?>
		
		<div class='col-md-4'>
			<h3> Professional </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Personal </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Community </h3><hr>


		</div>
	</div><!-- #future -->
	</div><!-- #container -->
	</section>

	<section id='past' class='past'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-6'>
				<h2> Past Projects</h2>
			</div>	
			<div class='col-xs-6'>
				<button id='past' class='btn btn-lg btn-default btn-section'>View / Hide</button>
			</div><div class='clear'></div>
			<hr>
		</div>
	<div id='past' class='sites'>

		<?php 
			// check if the repeater field has rows of data
			if( have_rows('past_projects') ):

			 	// loop through the rows of data
			    while ( have_rows('past_projects') ) : the_row();
		?>

		<div class='row'>
			<div class='col-xs-6'><a href='<?php  the_sub_field('link'); ?>'><?php  the_sub_field('name'); ?></a></div>
			<div class='col-xs-6 text-right'><button id='<?php  the_sub_field('slug'); ?>'>View More</button></div>
			<div class='clear'></div>

			<div id='<?php  the_sub_field("slug"); ?>' class=' ' style='display: none;'>


		<div class='row'>
			<div class='col-md-6'>
				<img class='img-responsive' src='<?php  the_sub_field("image"); ?>'>
			</div>
			<div class='col-md-6'>
				<?php  the_sub_field("description"); ?>
			</div>
		<div class='clear'></div>
		</div>

		<div class='row hide'>
			<div class='col-md-4'>
				test
				<b>Start Date: </b><?php the_field("start_date"); ?><br><br>
				<b>Length: </b><?php the_sub_field("project_length"); ?><br><br>
				<b>Target Date: </b><?php the_sub_field("target_finish_date"); ?><br><br>
			</div>
			<div class='col-md-4'>
				test
				
				<?php the_sub_field("project_goals"); ?>
				
			</div>
			<div class='col-md-4'>
				test
				
			</div>
		<div class='clear'></div>
		</div>


			</div>
		
		</div>
			        
     			 


		<?php
  			  endwhile;

			else :

  		 		 // no rows found

			endif;

		?>
		
		<div class='col-md-4'>
			<h3> Professional </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Personal </h3><hr>


		</div>
		<div class='col-md-4'>
			<h3> Community </h3><hr>


		</div>
	</div><!-- #past -->
	</div><!-- #container -->
	</section>

