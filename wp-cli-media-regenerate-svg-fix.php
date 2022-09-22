<?php
/**
 * Plugin Name:  Wp cli media regenerate svg fix
 * Plugin URI:   https://github.com/andriilive/wp-cli-media-regenerate-svg-fix
 * Description:  Fix the wp-cli media regenerate error
 * Version:      0.1.0
 * Author:       DigitalAndy
 * Author URI:   https://github.com/andriilive
 * License:      Apache License 2.0
 *
 */


add_filter( 'wp_generate_attachment_metadata', function( $metadata, $attachment_id ) {
    if ( 'image/svg+xml' === get_post_mime_type( $attachment_id ) ) {
        return new WP_Error( 'skip_svg_generate', __( 'Skipping SVG files.', 'textdomain' ) );
    }
    return $metadata;
}, 10, 2 );