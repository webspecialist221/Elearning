var channelName = "saddam221";
$(document).ready(function(){
	$.get(
			"https://www.googleapis.com/youtube/v3/channels",{
				part: 'contentDetails',
				forUsername: channelName,
				key: 'AIzaSyC9oX-8WKJlYQgF-6faojjFX82eZOgIAJ8'},
				function(data){
					$.each(data.items,function(i,item){
						console.log(item);
						pid = "PLZz66kSgoWyeQXOEtP82rqpNjrLHqm7yv";
						getVids(pid);
					})
				}
		);
		function getVids(pid)
		{
			$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems",{
				part: 'snippet',
				maxResults: 10,
				playlistId: pid,
				key: 'AIzaSyC9oX-8WKJlYQgF-6faojjFX82eZOgIAJ8'},
				function(data){
					var output;
					$.each(data.items,function(i,item){
						console.log(item);
						videoTitle = item.snippet.title;
						videoId = item.snippet.resourceId.videoId;
						output = '<div class="col-md-6"><iframe  width="400" height="225"  src=\"//www.youtube.com/embed/'+videoId+'\" frameborder="2" allowfullscreen></iframe></div>';
						$('#result').append(output);
					})
				}
			);
		}
});