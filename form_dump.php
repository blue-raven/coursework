<?php
?>

<h4>Simple PHP 5.x Script to output data contained within 'GET' and 'POST' Super-Globals Variables!</h4>
<br />

<h2>'Get' Data</h2>
<hr />	

	<?php if (count( $_GET ) > 0) : ?>
		
		<ul>
		
		<?php foreach ( $_GET as $key => $element ) : ?>	
			
			<li><?php echo ( "' " . $key . " ' -> " . $element);?></li>
			
	<?php endforeach; ?>
		
		</ul>
		<p>(Data Displayed as Key -> Value Pairs.)</p>
	<?php else :?>		
		
		<h3>No Data in $_GET to Display...</h3>
					
	<?php endif; ?>

<br />
<hr />
<br />
<br />

<h2>'Post' Data</h2>

<br />
<hr />
<br />

	<?php if (count( $_POST ) > 0) : ?>
		
		<ul>
		
		<?php foreach ( $_POST as $key => $element ) : ?>	
			
			<li><?php echo ( "' " . $key . " ' -> " . $element);?></li>
			
	<?php endforeach; ?>
		
		</ul>
		<p>(Data Displayed as Key -> Value Pairs.)</p>
	<?php else :?>		
		
		<h3>No Data in $_POST to Display...</h3>
					
	<?php endif; ?>
	
<br />
<hr />
<br />

	
