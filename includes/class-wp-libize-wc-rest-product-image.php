<?php

class Wp_Libize_Wc_Rest_Product_Image {
	protected $namespace = 'wc/v3';

	protected $rest_base = 'scrap-product-image';

	public function post_product_image(WP_REST_Request $data ) {		// WordPress environment
		require(dirname(__FILE__) . '/../../../../wp-load.php');

		$wordpress_upload_dir = wp_upload_dir();
		$body = json_decode($data->get_body());
		$filename = basename($body);
		$new_file_path = $wordpress_upload_dir['path'] . '/' . $filename;
		$id = -1;

		if(file_put_contents( $new_file_path, file_get_contents($body))) {
			// looks like everything is OK
			$new_file_mime = mime_content_type( $new_file_path );
			$id = wp_insert_attachment( array(
				'guid'           => $new_file_path,
				'post_mime_type' => $new_file_mime,
				'post_title'     => preg_replace( '/\.[^.]+$/', '', $filename ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			), $new_file_path );

			// wp_generate_attachment_metadata() won't work if you do not include this file
			require_once( ABSPATH . 'wp-admin/includes/image.php' );

			// Generate and save the attachment metas into the database
			wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
		}

		return wp_get_attachment_url($id);
	}

	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				'methods' => 'POST',
				'callback' => array( $this, 'post_product_image' ),
				'permission_callback' => '__return_true'
			)
		);
	}
}
