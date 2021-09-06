<?php
// Begin Mockingbird Badge Code Snippet
// Custom function to display inline SVG
function inline_svg( $name ) {
	$file = 'https://mockingbird.marketing/' . $name . '.svg';
	include( $file );
}

// Display inline SVG markup
?>
<div class="mb-badge">
    <a href="https://mockingbird.marketing/"><?php inline_svg( 'mockingbird-footer-logo' ); ?></a>
</div>
<?php
// End Mockingbird Badge Code Snippet
