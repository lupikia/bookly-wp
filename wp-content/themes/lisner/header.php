<!doctype html >

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<?php do_action( 'pbs_head' ); ?>
</head>


<?php $option = get_option( 'pbs_option' ); ?>
<body <?php body_class() ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6481072.js"></script>
<!-- End of HubSpot Embed Code -->

<div id="booking-overlay">
	<div id="booking-schedule">
		<span id="close"><i class="material-icons mf">clear</i></span>
		<?php echo do_shortcode('[webba_booking service="1"]');?>
	</div>
</div>
<div id="standby-off">
</div>
<!-- Header -->
<header class="header header-top <?php echo class_exists( 'Lisner_Core' ) && isset( $option['menu-sticky'] ) && 'yes' == $option['menu-sticky'] ? esc_attr( 'header-sticky' ) : ''; ?>">
	<?php get_template_part( 'views/header/header-0' ); ?>
</header>
