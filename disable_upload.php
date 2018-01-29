<?php
/**
 * Plugin Name: Disable WordPress Uploads
 * Description: Prevents Uploads to Media Library
 * Author: Wan Zulkarnain
 * Author URI: http://wanzul.net
 * Version: 1.0
 */

function blog_wanzul_disable_upload($file)
{
    $file['error'] = 'Uploading to WordPress Media Library is denied';
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'blog_wanzul_disable_upload');
