<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WPJM Package Product
 */
class pebas_pl_package_product extends WC_Product {
	/**
	 * Compatibility function for `get_id()` method
	 *
	 * @return int
	 */
	public function get_id() {
		return parent::get_id();
	}

	/**
	 * Get product id
	 *
	 * @return int
	 */
	public function get_product_id() {
		return $this->get_id();
	}

	/**
	 * Compatibility function to retrieve product meta.
	 *
	 * @param string $key
	 *
	 * @return mixed
	 */
	public function get_product_meta( $key ) {
		return $this->get_meta( '_' . $key );
	}
}
