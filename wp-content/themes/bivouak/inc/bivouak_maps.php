<?php

function bivouak_google_map_api( $api ){

	$api['key'] = 'AIzaSyDbqz4_lYYofB_qRGUi9EB_H9W0pvrF8qI';

	return $api;

}

add_filter('acf/fields/google_map/api', 'bivouak_google_map_api');
