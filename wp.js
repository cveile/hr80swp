var player = document.getElementById('player'); // id for audio element
//$(".playBtn").on('click', function(){
//	var fa = $(this).find(".fa")
	
//	if( $(fa).hasClass("fa-play")){
//		$(fa).fadeOut(150, function(){
//			$(this).removeClass("fa-play").addClass("fa-pause").fadeIn(150);
//			player.play();
//			player.onerror = function() {
 //   alert("Error! Something went wrong");
//};
//		});
//	}else if($(fa).hasClass("fa-pause")){
//		$(fa).fadeOut(150, function(){
//			$(this).removeClass("fa-pause").addClass("fa-play").fadeIn(150);
//			player.pause();
//		});
//	}
	
//});

$(".heart").on('click', function(){
	$(this).toggleClass("hearted")
});

$(".hamburger").on('click', function(){
	$(".right").removeClass("closed").addClass("closed")
	$(".left").removeClass("open").addClass("open")
});

$(".closeLeft").on('click', function(){
	$(".right").removeClass("closed")
	$(".left").removeClass("open")
});

$(".dropDownOpener").on('click', function(){
	var dropSelect = $(this).data("dropdown");
	
	$(this).toggleClass("active");
	$(dropSelect).toggleClass("open");
	
});

$("a").on('click', function(e){
	var href = $(this).attr("href");
	
	if (href = "#"){
		e.preventDefault();
	}
	
});
//$(".back").on('click', function(){
//	stream.currentTime -= 30.0;
//});
//$(".next").on('click', function(){
//	stream.currentTime += 30.0;
//});

function autoRefresh_div() {
    $("#playpage").load("https://hardrockin80s.com/wp_play.php", function() {
        setTimeout(autoRefresh_div, 10000);
    });
} // was }

autoRefresh_div();

$(document).ready(function(){
  $('#hideshow').on('click', function(event) { 
	  $('#panel').css('display:','block');
	  $('.panel').toggle('show');
  	  $("#site").width(400);
      $("#site").height(575);

  });
});

