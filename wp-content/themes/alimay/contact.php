<?php
/**
 * Template Name: Contact
 */
?>

<?php 
	get_header(); 
?>

<div class="contact-us">
	
	<aside class="callout">
		<h1>let’s chat <span>about your event</span></h1>
		<div>
			<span class="address line1">251 West 39th Street</span>
			<span class="address line2">12th Floor</span>
			<span class="address geo">New York, New York </span>
			<span class="address zip">10018</span>
			<span class="address tel">212 796 1935</span>
		</div>
		<a href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x61;&#x6C;&#x69;&#x6D;&#x61;&#x79;&#x65;&#x76;&#x65;&#x6E;&#x74;&#x73;&#x2E;&#x63;&#x6F;&#x6D;?subject=From%20Website">&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x61;&#x6C;&#x69;&#x6D;&#x61;&#x79;&#x65;&#x76;&#x65;&#x6E;&#x74;&#x73;&#x2E;&#x63;&#x6F;&#x6D;</a>
	</aside>
	
<?php
	$errors = array();
	$missing = array();
	// check if the form has been submitted
	if (isset($_POST['_submit']) && isset($_POST['url']) && $_POST['url'] == '' ) {
	  // email processing script
	  $to = 'info@alimayevents.com';
	  $subject = 'Feedback from Website';
	  // list expected fields
	  $expected = array('your_name', 'guests_number', 'email_address', 'location', 'phone', 'type_planning', 'date', 'type_event', 'budget', 'heard', 'note_alimay');
	  // set required fields
	  $required = array('your_name', 'guests_number', 'email_address', 'location', 'type_planning', 'date', 'type_event', 'budget', 'note_alimay');
	  // create additional headers
	  $headers = "From: Alimay Contact Form <info@alimayevents.com>\r\n";
	  $headers .= "Bcc: lastexittospringfield@gmail.com\r\n";
	  $headers .= 'Content-Type: text/plain; charset=utf-8';
	  require('processmail.inc.php');
	}
?>

	<?php if ($mailSent): ?>
		<div id="thanks">
			<h1>
				<span>thank you</span> for contacting us
			</h1>
			<p>
				We will be in touch shortly.
			</p>
		</div>
	<?php else: ?>
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			<ul class="form-wrap">
				<li>
					<input type="text" name="your_name" value="<?php if ( $missing || $errors) { echo htmlentities($your_name); } ?>" id="your_name" placeholder="Your name*">
					<?php if ( $missing && in_array('your_name', $missing) ): ?>
						<span class="warning">Please enter your name</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="guests_number" value="<?php if ( $missing || $errors) { echo htmlentities($guests_number); } ?>" id="guests_number" placeholder="Number of Guests*">
					<?php if ( $missing && in_array('guests_number', $missing) ): ?>
						<span class="warning">Please enter number of expected guests</span>
					<?php endif ?>
				</li>
				<li>
					<input type="email" name="email_address" value="<?php if ( $missing || $errors) { echo htmlentities($email_address); } ?>" id="email_address" placeholder="Email Address•">
					<?php if ( $missing && in_array('email_address', $missing) ): ?>
						<span class="warning">Please enter a valid email address</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="location" value="<?php if ( $missing || $errors) { echo htmlentities($location); } ?>" id="location" placeholder="Location (New York, Hamptons, etc)*">
					<?php if ( $missing && in_array('location', $missing) ): ?>
						<span class="warning">Please enter location</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="phone" value="<?php if ( $missing || $errors) { echo htmlentities($phone); } ?>" id="phone" placeholder="Phone Number (optional)">
				</li>
				<li>
					<input type="text" name="type_planning" value="<?php if ( $missing || $errors) { echo htmlentities($type_planning); } ?>" id="type_planning" placeholder="Type of Planning (Full, Partial, Month of)*">
					<?php if ( $missing && in_array('type_planning', $missing) ): ?>
						<span class="warning">Please enter type of planning</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="date" value="<?php if ( $missing || $errors) { echo htmlentities($type_planning); } ?>" id="date" placeholder="Desired Date*">
					<?php if ( $missing && in_array('type_planning', $missing) ): ?>
						<span class="warning">Please enter desired date</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="type_event" value="<?php if ( $missing || $errors) { echo htmlentities($type_event); } ?>" id="type_event" placeholder="Type of Event (Wedding, Social, Corporate, Non profit)*">
					<?php if ( $missing && in_array('type_event', $missing) ): ?>
						<span class="warning">Please specify event type</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="budget" value="<?php if ( $missing || $errors) { echo htmlentities($budget); } ?>" id="budget" placeholder="Budget*">
					<?php if ( $missing && in_array('budget', $missing) ): ?>
						<span class="warning">Please enter a budget</span>
					<?php endif ?>
				</li>
				<li>
					<input type="text" name="heard" value="<?php if ( $missing || $errors) { echo htmlentities($heard); } ?>" id="heard" placeholder="How you heard about us (optional)">
				</li>
				<li class="single">
					<textarea name="note_alimay" placeholder="Note to Alimay*" rows="8" cols="40"><?php
	                if ($missing || $errors) {
	                  echo htmlentities($note_alimay, ENT_COMPAT, 'UTF-8');
	                } ?></textarea>
					<?php if ( $missing && in_array('note_alimay', $missing) ): ?>
						<span class="warning">Please enter your notes</span>
					<?php endif ?>
				</li>
				<li id="blarp" class="single">
					<input type="text" name="url" value="" id="url" placeholder="http://example.com">
				</li>
				<li class="actions single">
					<span class="notes">
						Required fields marked *
					</span>
					<input type="submit" value="submit" class="submit" name="_submit">
				</li>
			</ul>
		</form>
	<?php endif ?>
	
	
</div>

<?php 
	get_footer(); 
?>