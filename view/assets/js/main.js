/*-------------------- PRE-LOADER --------------------*/
$(".loader").fadeOut();
$("#preloder").delay(200).fadeOut("slow");


/*--------------- BUTTON SCROLL TO TOP ---------------*/
$('#scrollToTop').click(function() {
    $('html, body').animate({scrollTop: 0},500);
});


/*------------------ TOP VIEW FILTER ------------------*/
// Filter anime via data-filter
$('.sidebar__tittle-filter li').click(function(){
    const value = $(this).attr('data-filter');
    if (value == '.day') {
        $('.sidebar__topview__item').show('500');
    }
    else {
        $('.sidebar__topview__item').not(value).hide('500');
        $('.sidebar__topview__item').filter(value).show('500');
    }
});
// Add class active
$('.sidebar__tittle-filter li').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
});


/*------------------ THUMBNAIL OVERLAY ------------------*/
$(".post__item-thumnail").hover(function(){
    $(this).children('.overlay').stop().fadeIn(300);
    }, function(){
    $(this).children('.overlay').stop().fadeOut(300);
});

$(".sidebar__topview__item").hover(function(){
    $(this).children('.overlay').stop().fadeIn(300);
    }, function(){
    $(this).children('.overlay').stop().fadeOut(300);
});


/*------------------ SEARCH MODAL ------------------*/
$('.header__navbar-icon-search #icon__search__').click(function(){
    $('.header__navbar-icon-search #navbar__search-modal').fadeIn(300);
});
$('.navbar__search-closeIcon').click(function(){
    $('.header__navbar-icon-search #navbar__search-modal').fadeOut(300);
});


/*------------------ PROFILE HOVER ------------------*/
$(".header__navbar-icon-user").hover(function(){
    $('.profile_user').stop().fadeIn(200);
    }, function(){
    $('.profile_user').stop().fadeOut(200);
});

/*------------------ PAGINATION ------------------*/
$('.pagination a').click(function(){
    $(".loader").show();
    $("#preloder").show();
    $(".loader").fadeOut();
    $("#preloder").delay(200).fadeOut("slow");
    $(this).addClass('current-page').siblings().removeClass('current-page');
});

/*------------------ EPISODE ------------------*/
$('.anime__episodes a').click(function(){
    $(".loader").show();
    $("#preloder").show();
    $(".loader").fadeOut();
    $("#preloder").delay(200).fadeOut("slow");
    $(this).addClass('ep-active').siblings().removeClass('ep-active');
});

/*-------------------- NEWS THUMBNAIL HOVER ------------------------ */
$(".news__item").hover(function(){
    $(this).children('.news__item__text').stop().animate({bottom: '45px'},300);
    }, function(){
    $(this).children('.news__item__text').stop().animate({bottom: '25px'}, 300);
});


/*------------------------- NEW EPISODE NOTIFICATION ---------------------------*/
var countDownDate = new Date("Dec 15, 2021 15:37:25").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Display 
  $("#countNewEp").text(days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds");
    
  // Check the count down is over
  if (distance < 0) {
    clearInterval(x);
    $("#countNewEp").text("New episode here!");
  }
}, 1000);


/*---------------------- CUSTOM VIDEO PLAYER -----------------------*/
var player = videojs('#videoPlayer',{
    autoplay: false,
    controls: true,
    loop: false,
    poster: "./assets/videos/poster-1.jpg",
    playbackRates: [0.5, 1, 1.5, 2],
    plugins: {
        hotkeys: {
            enableModifiersForNumbers: true,
            seekStep: 5
        }
    }
});

$('.control__player-btn-autoplay').click(function(){
    var attrSrc = $(this).children('img').attr('src');
    if (attrSrc == './assets/images/icons/icon-checkbox.svg') {
        $(this).children('img').attr('src','./assets/images/icons/icon-checkbox-fill.svg');
        player.loop(true);
    } else {
        $(this).children('img').attr('src','./assets/images/icons/icon-checkbox.svg');
        player.loop(false);
    }
});

$('.control__player-btn-follow').click(function(){
    var attrSrc = $(this).children('img').attr('src');
    if (attrSrc == './assets/images/icons/icon-heart.svg') {
        $(this).children('img').attr('src','./assets/images/icons/icon-heart-fill.svg');
    } else {
        $(this).children('img').attr('src','./assets/images/icons/icon-heart.svg');
        player.loop(false);
    }
});


