
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta charset="UTF-8">
  <title>HR80s new player</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


 <style>
  .buffered { 
    height: 20px; 
    position: relative;
    background: #555;
    width: 300px;
  }

  #buffered-amount {
    display: block;
    height: 100%;
    background-color: #777;
    width: 0;
  }

  .progress { 
    margin-top: -20px;
    height: 20px;  
    position: relative;
    width: 300px;
  }

  #progress-amount {
    display: block;
    height: 100%;
    background-color: #595;
    width: 0;
  }
	  
			@charset "UTF-8";
			* {
			  box-sizing: border-box;
			}

			body {
			  font-family: "Catamaran", sans-serif;
			  min-height: 100vh;
			  display: flex;
			  justify-content: center;
			  align-items: center;
			  background: linear-gradient(45deg,black,gray);
			}

			.player {
			  width: 400px;
			  height: 640px;
			   display: flex; 
			  flex-direction: column; 
			  align-items: center;
			  color: white;
			  overflow: hidden;
			  position: relative;
			  background: red;
			  margin: 10px;
			  box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.35);
				z-index: 2;


			}

@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 700px)
  and (-webkit-min-device-pixel-ratio: 2)
	and (orientation: portrait) {
  /* some CSS here */
.player { transform: scale(2);}
	 }
	 @media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 700px)
  and (-webkit-min-device-pixel-ratio: 2)
	and (orientation: landscape) {
  /* some CSS here */
.player { transform: scale(.75);}
	 }
@media only screen 
  and (min-device-width: 700px) 
  and (max-device-width: 1080px)
  and (-webkit-min-device-pixel-ratio: 2)
	and (orientation: portrait) {
.player { transform: scale(1.5);}
	 }
			.player .panel {
			  background: #343838;
			  position: absolute;
			  top: 68;
			  left: 0;
		  	  width: 400px;
			  height: 575px;
			/*  transition: 0.2s ease-in-out; */
			  z-index: 100;
				margin:0px;
				padding:0;
				display:none;
				max-width:400px;
			}
			 
	 		.player .left {
			  background: #343838;
			  position: absolute;
			  top: 0;
			  left: 0;
		  widtH: 100%;
			  height: 100%;
				  transform: translate(-100%, 0); 
			  display: flex;
			  justify-content: center;

			  transition: 0.35s ease-in-out;
			  z-index: 100;
			  align-items: center;
			}
			.player .left ul {
			  list-style: none;
			  padding: 0;
			  height: 100%;
			  display: flex;
			  flex-direction: column;
			  width: 100%;
			}
			.player .left ul li {
			  dispaly: block;
			  height: 100%;
			  display: flex;
			  text-align: center;
			  justify-content: center;
			  align-items: center;
			  border-bottom: 2px solid white;
			  transition: 0.15s ease-in-out;
			  cursor: pointer;
			}
			.player .left ul li:last-child {
			  border-bottom: none;
			}
			.player .left ul li:hover {
			  background: #bbe7be;
			}
			.player .left ul li:hover a {
			  color: #343838;
			}
			.player .left ul li a {
			  color: white;
			  text-decoration: none;
			  font-size: 25px;
			  transition: 0.15s ease-in-out;
			}
			.player .left.open {
			  transform: translate(0%, 0);
			}
			.player .left .closeLeft {
			  font-size: 35px;
			  position: absolute;
			  right: 20px;
			  top: 9px;
			  cursor: pointer;
			}
			.player .right {
			  width: 100%;
			  height: 100%;
			  position: absolute;
			  padding: 20px;
			  top: 0;
			  left: 0;
			/*  background: linear-gradient(-45deg, #008c9e, #00b2c9); */
				background: linear-gradient(-180deg, #cc0000 15%,black 85%);
			  transform: translate(0%, 0);
			  transition: 0.35s ease-in-out;
			  display: flex;
			  flex-direction: column;
			  justify-content: flex-end;
			  align-items: center;
			}
			.player .right .nav {
			  position: absolute;
			  top: 0;
			  left: 0;
			  display: flex;
			  justify-content: space-between;
			  align-items: center;
			  dispaly: block;
			  height: 62px; /* was 62 */
			  padding: 0 20px;
			  width: 100%;
				
			border-bottom:  1px solid black
			}
			.player .right .nav .logo {
			  font-weight: bold;
			}
			.player .right .nav .logo span {
			  color: #ccc;
			}
			.player .right .nav .hamburger {
			  font-size: 35px;
			  cursor: pointer;
			}
			.player .right.closed {
			  transform: translate(100%, 0);
			  transition: 0.75s ease-in-out;
			}
			.player .right img {
			  max-widtH: 100%;
			}
			.player .right .album {
			  width: 320px;
			}
			.player .right .song-meta-data {
			  text-align: center;
			}
			.player .right .song-meta-data .title {
			  margin-bottom: 0;
			}
			.player .right .song-meta-data p {
			  font-size: 12.5px;
			  margin: 0;
			}
			.player .right .buttons {
			  padding: 40px 0;
			  padding-bottom: 20px;
			  display: flex;
			  justify-content: space-between;
			  width: 100%;
			  align-items: center;
			  font-size: 25px;
			}
			.player .right .buttons .back, .player .right .buttons .play, .player .right .buttons .next {
			  cursor: pointer;
			  transition: 0.15s ease-in-out;
			}
			.player .right .buttons .back:hover, .player .right .buttons .play:hover, .player .right .buttons .next:hover {
			  border-color: #960000;
			  color: #960000;
			}
			.player .right .buttons .play {
			  width: 50px;
			  heighT: 50px;
			  display: block;
			  border-radius: 50px;
			  border: 2px solid white;
			  text-align: center;
			  display: flex;
			  justify-content: center;
			  align-items: center;
			}
			.player .right .buttons .play .fa {
			  margin-right: -3px;
			}
			.player .right .buttons .play .fa.fa-pause {
			  margin-right: 0;
			}
			.player .right .info {
			  width: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: space-between;
			  padding: 20px 0;
			  position: relative;
			}
			.player .right .info .dropDown {
			  position: absolute;
			  width: 100%;
			  background: #343838;
			  top: 0;
			  transform: translate(0%, -100%);
			  color: white;
			  padding: 20px;
			  transition: 0.15s ease-in-out;
			  opacity: 0;
			  pointer-events: none;
			  z-index:5;
			}
			.player .right .info .dropDown.open {
			  opacity: 1;
			  pointer-events: inherit;
			}
			.player .right .info .dropDown ul {
			  list-style: none;
			  padding: 0;
			  margin: 0;
			}
			.player .right .info .dropDown ul li {
			  padding: 10px 0;
			}
			.player .right .info .dropDown ul li.song {
			  color: #bbe7be;
			}
			.player .right .info .dropDown ul li a {
			  color: white;
			  text-decoration: none;
			  transition: 0.15s ease-in-out;
			}
			.player .right .info .dropDown ul li a:hover {
			  color: #bbe7be;
			}
			.player .right .info .song-played {
			  width: 100%;
			  padding: 0 10px;
			  position: relative;
			}
			.player .right .info .song-played .bar {
			/*  width: 100%;
			  height: 20px;
			  background: #343838;
			  border-radius: 10px; */
				width: 170px;
				height: 20px;
				background: #343838;
				border-radius: 10px;
				margin: 0px 0px 0px 55px;
			}
			.player .right .info .song-played .bar .inner-bar {
			  height: 20px;
			  background: #990000;
			  position: relative;
			  border-radius: 10px;
			  width: 34%;
			}
			.player .right .info .song-played .bar .inner-bar .dot {
			  position: absolute;
			  width: 20px;
			  height: 20px;
			  border-radius: 15px;
			  background: white;
			  right: 0;
			}
			.player .right .info .song-played .bar .inner-bar .dot:before {
			  content: "";
			  position: absolute;
			  left: 50%;
			  top: 50%;
			  transform: translate(-50%, -50%);
			  width: 10px;
			  height: 10px;
			  border-radius: 10px;
			  border: 1px solid #999;
			}
			.player .right .info .song-played p {
/*			  position: absolute;
			  display: flex;
			  justify-content: space-between;
			  width: 235px;
			  font-size: 12.5px;
				
*/
				position: absolute;
				display: flex;
				justify-content: space-between;
				width: 215px;
				font-size: 15;
				margin-left: 35px;
				margin-top: -17px;
				color: silver;
			}

			}


				
			}
			.player .right .info .song-played p span {
			  display: block;
			}
			.player .right .info .more {
			  display: flex;
			  cursor: pointer;
			}
			.player .right .info .more:hover span, .player .right .info .more.active span {
			  background: #bbe7be;
			  border: 2px solid #bbe7be;
			}
			.player .right .info .more span {
			  display: block;
			  width: 10px;
			  height: 10px;
			  border-radius: 5px;
			  border: 2px solid white;
			  margin: 2.5px;
			  transition: 0.15s;
			}
			.player .right .info .heart {
			  font-size: 20px;
			  cursor: pointer;
			}
			.player .right .info .heart .fa-heart-o {
			  transition: 0.15s ease-in-out;
			}
			.player .right .info .heart.hearted {
			  color: #bbe7be;
			}
			.player .right .info .heart.hearted .fa-heart-o:before {
			  content: "";
			}
	 .album { text-align: center;margin:auto;}

.background-image1 {
  background-image: url('https://hardrockin80s.com/images/albums/az_B79121_Ecstasy_Kissin\'%20Dynamite.jpg');
  background-size: cover;
  display: block;
  filter: blur(15px);
  -webkit-filter: blur(15px);
  height: 400px;
  left: 0;
  position: fixed;
  right: 0;
  z-index: 1;
}

.content {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 3px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
/*  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;*/
  top: 110px;
  left: 0;
  position: fixed;
  margin-left: 20px;
  margin-right: 20px;
  right: 0;
  z-index: 3;
  padding: 7px;
}

  </style>
  
</head>
<body>
 <audio preload id="stream" src="http://stream-licensing.com:8100/128k"></audio>  
	<div class="player">
<!--	<div class="panel">
		<div class="closeLeft">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<ul>
			<li><a href="#">128k Stream 1</a></li>
			<li><a href="#">128k Stream 2</a></li>
			<li><a href="#">32k Stream 1</a></li>
			<li><a href="#">32k Stream 2</a></li>
			<li><a href="#">Link 5</a></li>
		</ul>
	<iframe scrolling="auto" height="640" width="400" src="https://hardrockin80s.com" style="border:0;display:none" class="content" > </iframe>
	</div>-->
	<div class="right">
		<div class="nav">
			<div id="hideshow"><div class="hamburger1">
				<!--<i class="fa fa-barsxxx" aria-hidden="true">--><img src="https://hardrockin80s.com/templates/photobox/images/s5_logo.png" align="middle"><!--</i>-->
			</div></div>
			<p class="logo">HR80s <span>Web Player</span></p>
		</div>

		
		<div class="panel">
		  
	<iframe id="site" scrolling="auto" src="https://hardrockin80s.com" style="border:0;padding:0;margin:0;width: 1px; min-width: 100%; height:578px;"  > </iframe>
	</div>
<div id="playpage"></div>
		<div class="info">
			<div class="heart">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>
			<div class="song-played">
				
				<div class="bar">				
						<div class="inner-bar" data-width="34%">
						<div class="dot"></div>
					</div>
				</div>
				
				<p><span class="time-played"><a onclick="stream.volume -= 0.2"><i class="fa fa-volume-down"></i></a></span><span class="time-total"><a onclick="stream.volume += 0.2"><i class="fa fa-volume-up"></i></a><span></p>
			</div>	
			<div class="more dropDownOpener" data-dropdown="#drop1">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dropDown" id="drop1">
				<ul>
					<li class="song">Volume placeholder:</li>
					<li><a href="#">slider</a></li>
					<li><a href="#">Report song</a></li>
				</ul>	
			</div>	
		</div>	
		<div class="buttons">

<script>
    var stream = document.getElementById('stream');
	var status = document.getElementById('status');
	function load() {
		var status = document.getElementById("status");
		var currentClass = status.className;
		if (currentClass == "fa fa-play") { // Check the current class name
			status.className = "fa fa-pause";   // Set other class name
			stream.play();
		} else {
			status.className = "fa fa-play";  // Otherwise, player.play(); use `second_name`
			stream.pause();
		}
		
		
		//stream.play()
		//setTimeout(function(){
		//do what you need here
		//}, 4000);
		//setTimeout("player.pause()",5)
	}
	function rewind(){
			stream.currentTime -= 30.0;
	}
	function ffwd(){
			stream.currentTime += 30.0;
	}
	function hideshow(){
			 var x = document.getElementById("panel");
    		if (x.style.display === "none") {
        	x.style.display = "block";
			} else {
        	x.style.display = "none";
    }
	}

</script>
		
			<div class="back">
				<a onclick="rewind()"><i class="fa fa-backward" aria-hidden="true"></i></a>
			</div>
			<a onclick="load()"><div class="play playBtn">
			<i id="status" class="fa fa-play" aria-hidden="true"></i>	
			</div></a>
			<div class="next">
				<a onClick="ffwd()"><i class="fa fa-forward" aria-hidden="true"></i></a>
			</div>
		</div>	
	</div>	
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="wp.js"></script>

</body>
</html>
