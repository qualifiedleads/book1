/* Function for playing testimonials video. */
popup_video = {
	"init" : function(){
		var popup_video_object = '<div id="popup_video_object"><div class="video-object-overlay"></div><div id="popup_video_object_box">Video Player</div></div>';
		$("body").append(popup_video_object);
		$("#popup_video_object_box").css({
	        'position' : 'absolute',
	        'left' : '50%',
	        'top' : '50%',
	        'margin-left' : -$('#popup_video_object_box').width()/2,
	        'margin-top' : -$('#popup_video_object_box').height()/2
	    });
	    $("#popup_video_object .video-object-overlay").click(popup_video.hide);
	    var play_overlay = '<div class="video-thumb"><div class="background"></div><div class="foreground"></div></div>'
	    $("div.img").click(popup_video.show).append(play_overlay);
	},
	"show" : function(){
		$("#popup_video_object_box iframe").attr("src","http://www.youtube.com/v/YE7VzlLtp");
		$("#popup_video_object").css("display","block");
	},
	"hide" : function(){
		$("#popup_video_object").css("display","none");
	}
}