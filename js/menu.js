$(function(){
  /* PC */
  $(".sub").hide();
  $(".menu li").on("mouseenter", function(){
    $(".menu li").children().removeClass("active");
    $(this).children().addClass("active");
    $(this).parent().next().stop().slideDown(500);
  });
  $(".navi").on("mouseleave", function(){
    $(".menu li a").removeClass("active");
    $(this).children(".sub").slideUp(500);
  });

  /* TABLET */
  $(".menubar").click(function(){
    $("#tnavi").addClass("open");
    $(this).css("opacity", 0);
  });
  $(".xmark").click(function(){
    $("#tnavi").removeClass("open");
    $(".menubar").css("opacity", 1);
    $(".tsub").hide();
    $(".tmenu>li>a").children("span:last-child").css("rotate", "0deg");
  });

  $(".tsub").stop().hide();

  $(".tmenu>li>a").click(function(){
    if($(this).next(".tsub").is(":visible")){
      $(this).next(".tsub").stop().slideUp(500);
      $(this).children("span:last-child").css("rotate", "0deg");
    } else{
      $(".tsub").stop().slideUp(500);
      $(this).next(".tsub").stop().slideDown(500);
      $(".tmenu>li>a").children("span:last-child").css("rotate", "0deg");
      $(this).children("span:last-child").css("rotate", "90deg");
    }
    
  });

  /* MOBILE */
  $(".mham").click(function(){
    $("#mnavi").addClass("open");
    $(this).css("opacity", 0);
  });
  $(".mxmark").click(function(){
    $("#mnavi").removeClass("open");
    $(".mham").css("opacity", 1);
    $(".msub").hide();
    $(".mmenu>li>a").children("span:last-child").css("rotate", "0deg");
  });

  $(".msub").stop().hide();

  $(".mmenu>li>a").click(function(){
    if($(this).next(".msub").is(":visible")){
      $(this).next(".msub").stop().slideUp(500);
      $(this).children("span:last-child").css("rotate", "0deg");
    } else{
      $(".msub").stop().slideUp(500);
      $(this).next(".msub").stop().slideDown(500);
      $(".mmenu>li>a").children("span:last-child").css("rotate", "0deg");
      $(this).children("span:last-child").css("rotate", "90deg");
    }
  });
})