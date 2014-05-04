/*

============================================
@ Document Title: script.js
@ Created By: Austin Gardner-Smith
@ Created On: 00/00/2010
@ Description: Javascript for Project
@ Copyright ©Austin Gardner-Smith, 2010
============================================

*/

  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "http://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
	player = new YT.Player('player', {
	  height: '510',
	  width: '853',
	  playerVars: {
		//playlist: 'u1zgFlCw8Aw, c6ib9Fwquqg',
		autohide:1
	  },
	  videoId: 'D232816222A42FA2',
	  events: {
		'onReady': onPlayerReady,
		'onStateChange': onPlayerStateChange
	  }
	});
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
	event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.PLAYING && !done) {
	  setTimeout(stopVideo, 6000);
	  done = true;
	}
  }
  function stopVideo() {
	player.stopVideo();
  }
