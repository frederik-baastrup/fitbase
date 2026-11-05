<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="wrap page-wrap">
	<h1>Siden findes ikke</h1>
	<p class="muted">Siden er muligvis fjernet, eller produktet er udgået. Brug søgningen, eller kig i en af kategorierne.</p>
	<p><a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Til forsiden</a></p>
</section>
<?php
get_footer();
