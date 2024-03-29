<?php
/**
 * Template Name: Booking Product Shipping Tab Fields
 * Description: Content for bookings products creation
 *
 * @author pebas
 * @version 1.0.0
 * @package tabs
 */

?>
<div id="shipping_product_data" class="panel woocommerce_options_panel">
	<div class="options_group">
		<?php
		if ( wc_product_weight_enabled() ) {
			woocommerce_wp_text_input(
				array(
					'id'          => '_weight',
					'value'       => $bookable_product->get_weight( 'edit' ),
					'label'       => __( 'Weight', 'woocommerce' ) . ' (' . get_option( 'woocommerce_weight_unit' ) . ')',
					'placeholder' => wc_format_localized_decimal( 0 ),
					'desc_tip'    => true,
					'description' => __( 'Weight in decimal form', 'woocommerce' ),
					'type'        => 'text',
					'data_type'   => 'decimal',
				)
			);
		}

		if ( wc_product_dimensions_enabled() ) {
			?>
			<p class="form-field dimensions_field">
				<?php /* translators: WooCommerce dimension unit*/ ?>
				<label for="product_length"><?php printf( __( 'Dimensions (%s)', 'woocommerce' ), get_option( 'woocommerce_dimension_unit' ) ); ?></label>
				<span class="wrap">
					<input id="product_length" placeholder="<?php esc_attr_e( 'Length', 'woocommerce' ); ?>" class="input-text wc_input_decimal" size="6" type="text" name="_length" value="<?php echo esc_attr( wc_format_localized_decimal( $bookable_product->get_length( 'edit' ) ) ); ?>" />
					<input placeholder="<?php esc_attr_e( 'Width', 'woocommerce' ); ?>" class="input-text wc_input_decimal" size="6" type="text" name="_width" value="<?php echo esc_attr( wc_format_localized_decimal( $bookable_product->get_width( 'edit' ) ) ); ?>" />
					<input placeholder="<?php esc_attr_e( 'Height', 'woocommerce' ); ?>" class="input-text wc_input_decimal last" size="6" type="text" name="_height" value="<?php echo esc_attr( wc_format_localized_decimal( $bookable_product->get_height( 'edit' ) ) ); ?>" />
				</span>
				<?php echo wc_help_tip( __( 'LxWxH in decimal form', 'woocommerce' ) ); ?>
			</p>
			<?php
		}

		do_action( 'woocommerce_product_options_dimensions' );
		?>
	</div>

	<div class="options_group">
		<?php
		$args = array(
			'taxonomy'         => 'product_shipping_class',
			'hide_empty'       => 0,
			'show_option_none' => __( 'No shipping class', 'woocommerce' ),
			'name'             => 'product_shipping_class',
			'id'               => 'product_shipping_class',
			'selected'         => $bookable_product->get_shipping_class_id( 'edit' ),
			'class'            => 'select short',
		);
		?>
		<p class="form-field dimensions_field">
			<label for="product_shipping_class"><?php esc_html_e( 'Shipping class', 'woocommerce' ); ?></label>
			<?php wp_dropdown_categories( $args ); ?>
			<?php echo wc_help_tip( __( 'Shipping classes are used by certain shipping methods to group similar products.', 'woocommerce' ) ); ?>
		</p>
		<?php

		do_action( 'woocommerce_product_options_shipping' );
		?>
	</div>
</div>
