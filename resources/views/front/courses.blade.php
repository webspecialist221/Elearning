@extends('layout.front-master')
@section('content')
    <style>
    #result div{
        float:left;
        
        border: 1px thin #ccc;
    }
    </style>
    <script>
	var channelName = "saddam221";
$(document).ready(function(){
	$.get(
			"https://www.googleapis.com/youtube/v3/channels",{
				part: 'contentDetails',
				forUsername: channelName,
				key: 'AIzaSyC9oX-8WKJlYQgF-6faojjFX82eZOgIAJ8'},
				function(data){
					$.each(data.items,function(i,item){
						//console.log(item);
						pid = "<?php echo $records->playlist_id; ?>";
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
						res_title=videoTitle.substring(0,32)+'......';
						videoId = item.snippet.resourceId.videoId;
						output = '<div class="col-md-4"><h4>'+res_title+'</h4><iframe  width="310" height="225"  src=\"//www.youtube.com/embed/'+videoId+'\" frameborder="2" allowfullscreen></iframe></div>';
						$('#result').append(output);
					})
				}
			);
		}
});
</script>
	<div class="container">
		<div class="row" style="background:black;color:white;padding:3px;text-align:center;">
			<div class="col-md-6 col-md-offset-3">
				<h3>{{$records->name}}</h3>
			</div>
		</div>
	</div>
    <div class="container container-videos">

    <div class="row" id="result">
        
    </div>
</div>

@endsection

