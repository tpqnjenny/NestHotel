$(function(){
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
  // Main Background Img Change
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

  /* MOBILE */
  // Main Background Img Change
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
})