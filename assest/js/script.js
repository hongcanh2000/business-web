var width;
window.onload = function () {
  width = window.innerWidth;
};
$(document).ready(function () {
  if ((width = window.innerWidth <= 425)) {
    $(".tab__list").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
    });
    $(".clients__list").slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $(".review__list").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $(".service__list").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $(".team__list").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $(".blog__list").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  }
  if ((width = window.innerWidth <= 1200)) {
    $(".clients__list").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  }
});

var toTop = document.getElementById("scroll_to_top-btn");

window.onscroll = function(){ scrollFunction()};

function scrollFunction(){
  if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
    toTop.style.display = "block";
  }else {
    toTop.style.display = "none";
  }
}

function topFunction(){
  $("html, body").animate({scrollTop:0});
}
