<?php 

	include("includes/data.php");

	include("includes/functions.php");

	// Declare the page title and section
	$pageTitle = "Personal Media Library";
	$section   = null;

	// Include the header
	include("includes/header.php");
?>
	
<div class="section catalog random">
	<div class="wrapper">
		<h2>May we suggest something?</h2>
		<ul class="items">
			<?php
				$random = array_rand($catalog, 4);
				foreach($random as $id) {
					echo get_item_html($id, $catalog[$id]);
				}
			?>
		</ul>
	</div>
</div>

<?php 
	// Declare the footer
	include("includes/footer.php");
?>	