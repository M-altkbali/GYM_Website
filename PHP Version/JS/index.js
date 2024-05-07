var show = document.getElementsByClassName("video_show");
var close = document.getElementsByClassName("close_video");


close.addListener('click', function() {

    show.css("display","none");

});
