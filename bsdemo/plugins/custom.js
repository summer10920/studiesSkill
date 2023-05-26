$(document).ready(function () {

  //scroll to id
  $("#lokimenu a, #scrollt").click(function () {
    let who = $(this).attr("href");
    let val = $(who).offset().top - $("#lokimenu").innerHeight() + 1;
    $("html").animate({ scrollTop: val }, 1000, "swing");
  });

  //scroll spy
  $(window).scroll(function () { 
    spy();
  });
  spy();

  function spy() {
    let nowat = $(window).scrollTop();

    $("section").each(function () {
      let id = $(this).attr("id"),
        offset = $(this).offset().top,
        height = $(this).innerHeight();

      if (offset < nowat && nowat < offset + height) {
        //this section is nowat's zone
        $("#lokimenu a").removeClass("active");
        $(`#lokimenu a[href='#${id}']`).addClass("active");
      }
    });

    let totalw=$(window).innerWidth();
    let adh=$("#lokislider").innerHeight(); //100vh
    if(totalw>768){
      if(nowat<adh+1){ //in ad
        $("#lokimenu").removeClass("bg-dark");
        $("#scrollt").removeClass("shown");
      }
      else{
        $("#lokimenu").addClass("bg-dark");
        $("#scrollt").addClass("shown");
      }
    }


  }




});