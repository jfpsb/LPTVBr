var channelName = "lptvbrasil";
var chave = "AIzaSyAJhg3KXV5yCEVlkSpMILouVz4w6rpE4cg";

$(document).ready(function() {
	$.get(
		"https://www.googleapis.com/youtube/v3/channels",{
			part: 'contentDetails',
			forUsername: channelName,
			key: chave
		}, 
		function(data) {
			$.each(data.items, function(i, item){
				console.log(item);
				pid = item.contentDetails.relatedPlaylists.uploads;
				getVideos(pid);
			})
		}
	);
	
	function getVideos(pid) {
		$.get(
				"https://www.googleapis.com/youtube/v3/playlistItems",{
					part: "snippet",
					maxResults: 24,
					playlistId: pid,
					key: chave
				}, 
				function(data) {
					var output;
					var button, link, titulo;
					$.each(data.items, function(i, item){
						console.log(item);
						videoTitle = item.snippet.title;
						videoThumb = item.snippet.thumbnails.medium.url;
						videoUrl = "http://www.youtube.com/watch/" + item.snippet.resourceId.videoId;
						
						output = "<li class='videoLi'><div>";
						
						link = "<a href='" + videoUrl + "' class='videoLink' target='_blank'>" +
							"<img src='" + videoThumb + "' alt='" + videoTitle + "' class='videoThumb'/>" +
							"<p class='videoTitle'>" + videoTitle + "</p>" +
							"</a>";
						
						output = output + link + "</div></li>";
						
						//Append to results list
						$("#lista").append(output);
					})
				}
			);
	}
});