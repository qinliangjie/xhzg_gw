var swiper = new Swiper('.swiper-container1', {
    spaceBetween: 30,
    autoplay: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    }
});

var newtab = function() {
    var doms = $('#newnav div');
    for (var i of doms) {
        $(i).on("click", function() {
            $("#newnav div").removeClass("active");
            var ids = $(this).attr("data-id");
            $(this).addClass("active");
            if (ids) {
                $(".targetdom").removeClass("active animated fadeInRight");
                $("#" + ids).addClass("active animated fadeInRight");

            }
        })
    }
}
newtab();

function roleClick(use){
  console.log(12)
  $(".role").removeClass("active");
  use.addClass("active");
  $('.role .normalpic').show();
  $('.role .hovers').hide();
  use.find('.normalpic').hide();
  use.find('.hovers').show();
  var i = use.attr("data-id")-1;
  $(".charactPic img").removeClass("active animated fadeInRight");
  $(".charactPic img").eq(i).addClass("active animated fadeInRight");
}
$(".role").on("click",function(){
  roleClick($(this));
});

function roleClicknv(use){
  $(".rolenv").removeClass("active");
  use.addClass("active");
  $('.rolenv .normalpic').show();
  $('.rolenv .hovers').hide();
  use.find('.normalpic').hide();
  use.find('.hovers').show();
  var i = use.attr("data-id")-1;
  $(".charactPicnv img").removeClass("active animated fadeInRight");
  $(".charactPicnv img").eq(i).addClass("active animated fadeInRight");
}
$(".rolenv").on("click",function(){
  roleClicknv($(this));
});
$("#rolenvOne").click();
$("#roleOne").click();



// 开关导航
var switchs = 0;
$('.gotonav').on('click', function(e) {
    if (switchs == 0) {
       $(".nav").css("z-index", "99");
        $(".nav ul").height($(window).height() - $(".nav").height());
        $(".nav").css("background", "url(images/dise.png) no-repeat");
        $("html").css("overflow", "hidden");
        $(this).next().addClass("active animated fadeInRight");
        $(this).attr("src", "images/X.png")
        switchs = 1
    } else {
        $("html").css("overflow", "auto");
        $(".nav").css("z-index", "9");
        $(".nav").css("background", "url(images/tops.png) no-repeat");
        $(this).next().removeClass("active animated fadeInRight").addClass("active animated fadeOutRight");
        $(this).attr("src", "images/detail.png")
        switchs = 0
    }


});
function closeAll(){
  $('.gotonav').click()
}

function $$(selector, context) {
    context = context || document;
    var elements = context.querySelectorAll(selector);
    return Array.prototype.slice.call(elements);
}

function testProperty(property) {
    var root = document.documentElement;
    if (property in root.style) {
        root.classList.add(property.toLowerCase());
        return true;
    }
    root.classList.add('no-' + property.toLowerCase());
    return false;
}

function testValue(id, value, property) {
    var dummy = document.createElement('p');
    dummy.style[property] = value;
    if (dummy.style[property]) {
        root.classList.add(id);
        return true;
    }
    root.classList.add('no-' + id);
    return false;
}

function showOverlay(classname) {
    if (classname) {
        $(".overlay." + classname).removeClass("hide");
    } else {
        $(".overlay").removeClass("hide");
    }
    $("main").addClass("de-emphasized");
    $("body,html").addClass("overflow");
}

function hideOverlay(classname) {
    if (classname) {
        $(".overlay." + classname).addClass("hide");
    } else {
        $(".overlay").addClass("hide");
    }
    $("main").removeClass("de-emphasized");
    $("body,html").removeClass("overflow");
}


$(".close").on("click", function() {
    var myVideo = document.getElementById("gamevideo");
    myVideo.pause();
    myVideo.currentTime = 0;
    hideOverlay();
});
$(".play").click(function() {
    var myVideo = document.getElementById("gamevideo");
    
    myVideo.play();
    showOverlay("videoSection");
});

$(".touchshow").click(function() {
    var s = $(this).find('.detail');
    if (s.hasClass('fadeInLeft')) {

    } else {
        setTimeout(function() {
            s.removeClass("fadeInLeft").addClass('fadeOutLeft');
        }, 5000)
    }
    if (s.hasClass('fadeOutLeft')) {
        $(this).find('.detail').removeClass("fadeOutLeft").addClass('fadeInLeft');
    } else {
        $(this).find('.detail').addClass("active animated fadeInLeft");
    }
    
});
var mySwiper4 = new Swiper('.swiper-container4', {
     effect: 'coverflow',
     grabCursor: true,
     initialSlide: 2,
     centeredSlides: true,
     slidesPerView: 2.6,
     loop:true,
     autoplay:true,
     coverflowEffect: {
         rotate: 50,
         stretch: 20,
         depth: 150,
         modifier: 1,
         slideShadows: true,
     },
     pagination: {
         el: '.swiper-pagination4',
         clickable: true,
     }
 });

$(".showcode").click(function(){
    if($(this).find('.lineimg').attr('style')=='height: 4rem;'){
        console.log(123);
      $(this).find('.lineimg').css('height','0rem');
    }else{
      $('.lineimg').css('height','0rem');
      $(this).find('.lineimg').css('height','4rem');
    }
});
  var swipers = new Swiper('.swiper-container5', {
     autoplay: false,
     
     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
 });

var changTotal = function(e,ts){
  var srcs = $(ts).attr("data-id");
  $("#totalImg").attr("src","images/"+srcs+".png")
  if($("."+e).hasClass("active")){

  }else{
    $(".totalItem").removeClass("active animated flipInY");
    $("."+e).addClass("active animated flipInY");
  }
}

var s = 0;
function standby(){
  
  var a = $(".newdiv");
  if(s<2){
    a.eq(s).click()
    s+=1;
   
  }else{
    a.eq(s).click()
    s=0
  }
  setTimeout("standby()",10000);
}
standby();
// $(".jewelBody div").click(function(e) {
    
// });
// 
 $(".jewelBody div").on("touchstart",function(e){
      e.preventDefault();
      var s = $(this).attr("data-id");
      $(this).addClass(s);
});
$(".jewelBody div").on("touchend",function(e){
    e.preventDefault();
    var s = $(this).attr("data-id");
    $(this).removeClass(s);
    $(".showalert").removeClass("hide");
    $("main").addClass("de-emphasized");
    $("body,html").addClass("overflow");
    var a = $(this).attr("class");
    $("."+a+"J").click();
});
$(".aclose").click(function(){
  $(".showalert").addClass("hide");
    $("main").removeClass("de-emphasized");
    $("body,html").removeClass("overflow");
});
$(".boxJ").on("click",function(){
    if ($(this).hasClass("activeJ")){

    }else{
      if($(".activeJ")){
        var s = $(".activeJ").attr("src");
        var ids = $(".activeJ").attr("data-j");
        var b = s.substring(0,s.length-6)+ids+".png";
        $(".activeJ").attr("src",b);
        $(".activeJ").removeClass("activeJ");
      }
        $(this).addClass("activeJ");
        var a = $(this).attr("src");
        var aids = $(this).attr("data-j");
        var c = a.substring(0,a.length-5)+aids+"1.png";
        $(this).attr("src",c);
        var source = $(this).attr("data-id");
        $(".jewleContent").attr("src","images/jewel/"+source+".png");
    }
});