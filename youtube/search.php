<?php
$htmlBody = <<<END
END;
// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
// Call set_include_path() as needed to point to your client library.
require_once '../vendor/autoload.php';
require_once '../vendor/google/apiclient/src/Google/Client.php';
require_once '../vendor/google/apiclient/src/Google/Service/YouTube.php';
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
	// Call the search.list method to retrieve results matching the specified
	// query term.
	$searchResponse = $youtube->search->listSearch ( 'id,snippet', array (
			'q' => 'Linkin Park ' . $nomeMusica,
			'maxResults' => 12 
	) );
	
	$videos = '';
	// Add each result to the appropriate list, and then display the lists of
	// matching videos, channels, and playlists.
	foreach ( $searchResponse ['items'] as $searchResult ) {
		switch ($searchResult ['id'] ['kind']) {
			case 'youtube#video' :
				$videos .= sprintf ( "<li class='videosLi'><div><a class='videoLink' href='http://www.youtube.com/watch/%s' target='_blank'>
						<img src='%s'class='videoImg'/><p>%s</p></a></div></li>", $searchResult ['id'] ['videoId'], $searchResult ['snippet'] ['thumbnails'] ['medium'] ['url'], $searchResult ['snippet'] ['title'] );
				break;
		}
	}
	$htmlBody .= <<<END
    <ul class="videos-lista">$videos</ul>
END;
} catch ( Google_Service_Exception $e ) {
	$htmlBody .= sprintf ( '<p>A service error occurred: <code>%s</code></p>', htmlspecialchars ( $e->getMessage () ) );
} catch ( Google_Exception $e ) {
	$htmlBody .= sprintf ( '<p>An client error occurred: <code>%s</code></p>', htmlspecialchars ( $e->getMessage () ) );
}
?>