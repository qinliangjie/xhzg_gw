$(".secoundbody").css("height",$(window).height())

function showOverlay(classname) {
  if(classname) {
      $(".overlay."+classname).removeClass("hide");
  }else{
      $(".overlay").removeClass("hide");
  }
  $("main").addClass("de-emphasized");
  $("body,html").addClass("overflow");
}
function hideOverlay(classname) {
  if(classname) {
      $(".overlay."+classname).addClass("hide");
  }else{
      $(".overlay").addClass("hide");
  }
  $("main").removeClass("de-emphasized");
  $("body,html").removeClass("overflow");
}


$(".close").on("click",function(){
  var myVideo =document.getElementById("gamevideo");
  myVideo.pause();
  myVideo.currentTime = 0;
  hideOverlay();
});
$(".play").click(function(){
  var myVideo =document.getElementById("gamevideo");
  var srcs = $(this).attr("data-src");
  myVideo.src = srcs;
  myVideo.play();
  showOverlay("videoSection");
});
