<?php
$htmlBody = <<<END
END;
// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
// Call set_include_path() as needed to point to your client library.
require_once 'vendor/autoload.php';
require_once 'vendor/google/apiclient/src/Google/Client.php';
require_once 'vendor/google/apiclient/src/Google/Service/YouTube.php';
/*
 * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
 * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
 * Please ensure that you have enabled the YouTube Data API for your project.
 */
$DEVELOPER_KEY = 'AIzaSyAJhg3KXV5yCEVlkSpMILouVz4w6rpE4cg';
$client = new Google_Client ();
$client->setDeveloperKey ( $DEVELOPER_KEY );
// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube ( $client );

try {
	// Call the channels.list method to retrieve information about the
	// currently authenticated user's channel.
	$channelsResponse = $youtube->channels->listChannels ( 'contentDetails', array (
			'forUsername' => 'lptvbrasil' 
	) );
	
	$htmlBody = '';
	
	foreach ( $channelsResponse ['items'] as $channel ) {
		// Extract the unique playlist ID that identifies the list of videos
		// uploaded to the channel, and then call the playlistItems.list method
		// to retrieve that list.
		$uploadsListId = $channel ['contentDetails'] ['relatedPlaylists'] ['uploads'];
		
		$playlistItemsResponse = $youtube->playlistItems->listPlaylistItems ( 'snippet', array (
				'playlistId' => $uploadsListId,
				'maxResults' => 24 
		) );
		
		foreach ( $playlistItemsResponse ['items'] as $playlistItem ) {
			$tituloVideo = $playlistItem ['snippet'] ['title'];
			$thumbnailVideo = $playlistItem ['snippet'] ['thumbnails'] ['medium'] ['url'];
			$linkVideo = "http://www.youtube.com/watch/" . $playlistItem ['snippet'] ['resourceId'] ['videoId'];
			
			$output = "<div class='linkWrapper'>";
			
			$link = "<a href='" . $linkVideo . "' class='videoLink' target='_blank'>";
			$link .= "<img src='" . $thumbnailVideo . "' alt='" . $tituloVideo . "' class='videoThumb' />";
			$link .= "<p class='videoTitle'>" . $tituloVideo . "</p></a>";
			
			$output = $output . $link . "</div>";
			
			$htmlBody = $htmlBody . $output;
		}
	}
} catch ( Google_Service_Exception $e ) {
	$htmlBody = sprintf ( '<p>A service error occurred: <code>%s</code></p>', htmlspecialchars ( $e->getMessage () ) );
} catch ( Google_Exception $e ) {
	$htmlBody = sprintf ( '<p>An client error occurred: <code>%s</code></p>', htmlspecialchars ( $e->getMessage () ) );
}