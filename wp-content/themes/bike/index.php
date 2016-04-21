<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="section" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<img class="img-responsive" src="wp-content/themes/bike/assets/bike.png" />
				</div>
				<div class="col-xs-12 col-md-5" id="title">
					<h3>Buffalo NY's Second Annual</h3>
					<h1>World<br />
						Naked<br />
						Bikeride<br />
					</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="bare-banner">
		<img src="wp-content/themes/bike/assets/white-banner.png" id="white-banner">
		<h2 id="bare">BARE AS YOU DARE</H2>
	</div>
		
	<div class="section" id="time">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<img class="img-responsive" id="time-img" src="wp-content/themes/bike/assets/time.png" />
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="mission">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-xs-12">
					<p class="tk-macho"><strong>The Buffalo World Naked Bike Ride is a happening of people-powered transportation bringing awareness to oil addiction and the negative impacts of car culture. Our naked bodies will symbolize the vulnerability of cyclists on the roads. Come "as bare as you dare" to the Buffalo Underwear/Naked Ride and help us promote our vision of a cleaner, safer, body-positive world.</strong></p>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="rules">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-xs-12">
					<h2 id="rules-title">The Rules</h2>
					<p class="tk-macho">Celebrating freedom from oil and the beauty of people!
						Less gas more ass! Burn fat not oil! Nude not crude!</p>

						<p class="tk-macho">DRUGS | BOOZE = arrest.</p>

						<p class="tk-macho">Sometimes bystanders get grabby :(
						SHY? Stay towards center, out of reach.
						CHIVALROUS? Guard our flanks.</p>

						<p class="tk-macho">YOU'RE RESPONSIBLE!
						Be prepared, stay alert, take care, help others.</p>

						<p class="tk-macho">Obey police and thank them for their help.
						Goodies may target ticketing. Bare at your risk.</p>

						<p class="tk-macho">PARTICIPANTS must utilize Person-Powered Wheels</p>

						<p class="tk-macho">NO PHOTOS in our before/after space (xcpt auth'd)
						Assume that you will be photographed on ride.</p>

						<p class="tk-macho">Arrive CLOTHED&amp;SHOED and carry weather options.
						NO GLASS! RECYCLE cans. Bring refillables.</p>

						<p class="tk-macho">LEAVE NO TRACE!!! PICK IT UP and PACK IT OUT!!!</p>

						<p class="tk-macho">HAVE THE TIME OF YOUR LIFE!!!</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<h2>GET IN TOUCH!</H2>
					<p>TELL US THINGS!</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
				</div>
				<img class="img-responsive" id="phone-img" src="wp-content/themes/bike/assets/phone.png" />
			</div>
		</div>
	</div>

	<div class="section" id="donate">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<h2>OR DONATE!</H2>
					<p>We need the Money.</p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<img class="img-responsive" id="" src="wp-content/themes/bike/assets/donate.png" />
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="bottom-img">
		&nbsp;
	</div>

<?php get_footer(); ?>
