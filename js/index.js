$(function(){
  /* MENU */
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

  /* MAIN BANNER */
  const mbanner = (".mbanner").length;
  for(let i=1; i<=mbanner; i++){
    $(".pagination").append("<li><span>●</span></li>")
  }
  $(".pagination li:first").addClass("active");

  let mban_w = $("#main").width();
  let Num = 0;
  $(".prev").click(function(){
    if(Num<=0) return false;
    Num--;
    $(".mbanner").animate({left: -mban_w*Num
    }, 500, function(){
      $(".pagination li").removeClass("active");
      $(".pagination li").eq(Num).addClass("active");
    });
  });
  $(".next").click(function(){
    if(Num >=7) return false;
    Num++;
    $(".mbanner").animate({left: -mban_w*Num
      }, 500, function(){
        $(".pagination li").removeClass("active");
        $(".pagination li").eq(Num).addClass("active");
    });
  });
  $(".pagination li").click(function(){
    const strName = $(this).index();
    slideTarget(strName);
    return false;
  });
  function slideTarget(n){
    const pos = Number(n) * -100+"%";
    $(".pagination li").removeClass("active");
    $(".pagination li").eq(n).addClass("active");
    $(".mbanner").animate({left:pos}, 500);
  };
    setInterval(function(){
      Num++;
      if(Num>7) Num=0;
      $(".pagination li").eq(Num).trigger("click");
    }, 5000);

  /* CONT1 - SPECIAL OFFERS */
  $(".pkg1, .pkg2, .pkg3").waypoint(function(){
    $(this).addClass("fadeInUp");
  }, {offset: "75%"
  });

  /* CONT3 - ACCOMMODATION */
  $(".type ul:not(:first)").hide();
  $(".rooms li").on("click", function(){
    const show = $(this).index();
    $(".type ul").hide();
    $(this).parent().next().children().eq(show).stop().fadeIn()
  });

  /* CONT4 - NEST MEMBERSHIP */
  $(".mem1, .mem2, .mem3").waypoint(function(){
    $(this).addClass("fadeInUp");
  }, {offset: "75%"
  });

  /* CONT5 - INTRODUCE */
  $("#cont5").waypoint(function(){
    $(this).addClass("fadeIn");
  }, {offset: "75%"});

  /* TABLET */
  let showImg, nextImg;
  function fadeInOut(){
    showImg = $(".bg img:eq(0)");
    nextImg = $(".bg img:eq(1)");
    nextImg.addClass("show");
    nextImg.css("opacity", "0").animate({opacity: 1}, 1000, function(){
      $(".bg").append(showImg);
      showImg.removeClass("show");
    });
  };
  setInterval(function(){fadeInOut()}, 3000);

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
  let showMimg, nextMimg;
  function MfadeInOut(){
    showMimg = $(".mbg img:eq(0)");
    nextMimg = $(".mbg img:eq(1)");
    nextMimg.addClass("change");
    nextMimg.css("opacity", "0").animate({opacity: 1}, 1000, function(){
      $(".mbg").append(showMimg);
      showMimg.removeClass("change");
    });
  };
  setInterval(function(){MfadeInOut()}, 3000);

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