<?php

	// Bucketblog
	//
	// A PHP photoblog website that pulls your photos down
	// from a Photobucket album.
	//
	// Setup
	//
	// 1. Visit photobucket.com and get your RSS url.
	// 2. Set your blog title and key below.

	// Set error reporting
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	// Include the Magpie RSS library
	require_once 'magpierss-0.72/rss_fetch.inc';

	// Setup blog options
	$blog = array(
		'title' => 'Bucketblog Demo',
		'rss' => 'http://feed1186.photobucket.com/albums/z378/codazoda/Bucketblog%20Demo/feed.rss'	
	);
		
	// Load the RSS feed from Photobucket
	$feed = fetch_rss($blog['rss']);
	
	// Debug output as HTML comments
	//echo "<!--\n" . print_r($feed, true) . "\n-->\n";

	// Loop through the RSS items
	foreach ($feed->items as $item) {

		// Add this image to the images array
		$images[] = array (
			'url'=>$item['guid'],
			'date'=>date('m-d-Y', strtotime($item['pubdate'])),
			'timestamp'=>strtotime($item['pubdate']),
			'title'=>$item['media']['content_title'],
			'desc'=>$item['media']['content_description']
		);

	}
	
	// Set a default image
	if (!isset($_GET['i'])) {
		$i = 0;
	} else {
		$i = $_GET['i'];
	}
	
	// Count the total items
	$last = count($images) - 1;
	
	// If this is not the first image
	if ($i > 0) {
		$prev = $i - 1;
	} else {
		$prev = $last;
	}
	
	// If this is not the last image
	if ($i < $last) { 
		$next = $i + 1;
	} else {
		$next = 0;
	}
	
	// Create an array for the active image
	$image = $images[$i];
		
	// Load the template
	require 'template.php';

?>
