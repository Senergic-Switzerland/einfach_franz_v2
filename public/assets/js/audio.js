/*$(document).ready(function () {

var playlist = Array.from(document.querySelectorAll("#myAudio"));
var play_pause_button=Array.from(document.querySelectorAll("#play-pause-button"));
console.log(playlist);

  $(play_pause_button).each(function(i){

$(this).on("click",function(){
    if($(this).hasClass('fa-play'))
    {
      $(this).removeClass('fa-play');
      $(this).addClass('fa-pause');
      $(playlist[i]).each(function(){
        console.log(playlist[i])

      $(this).play();
    })

    }
   else
    {
      $(this).removeClass('fa-pause');
      $(this).addClass('fa-play');
      $(playlist[i].currentSrc).each(function(){

      $(this).pause();
    })

    }

});
$(playlist[i]).each(function(){

$(this).onended = function() {
     $(this).removeClass('fa-pause');
     $(this).addClass('fa-play');
};
})

});







});*/