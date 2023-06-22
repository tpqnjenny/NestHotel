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

  /* pagination */
  const div = $(".ex").length;
  for(let i=0; i<div; i++){
    $(".pagination").append("<li><a href=''>●</a></li>")
  }
  $(".pagination li:first").addClass("active");

  // const menu = $(".pagination li");
  // const contents = $(".ex");

  // menu.click(function(event){
  //   event.preventDefault();

  //   const tg = $(this);
  //   const i = tg.index();

  //   const section = contents.eq(i);
  //   const tt = section.offset().top-100;

  //   $("html, body").stop().animate({scrollTop:tt});
  // });
  // $(window).scroll(function(){
  //   const sct = $(window).scrollTop();
  //   contents.each(function(){
  //     const tg1 = $(this);
  //     const n = tg1.index() ;
  //     if(tg1.offset().top-100 <= sct){
  //       menu.removeClass("active");
  //       menu.eq(n-1).addClass("active");
  //     };
  //   });
  // });
  quickClick();
  function quickClick(){
    $(".pagination li").click(function(){
      var gnbindex = $(this).index();
      var length=0;
      for(var f=1; f<=(gnbindex); f++){
        length+=$("#cont"+f).height();
      }
      if($("body").find(".ex:animated").length >= 1)
      return false;
      $(this).addClass("active").siblings("li").removeClass("active");
      
      $(".ex").animate({"top": -length + "px"}, 800, "swing");
      return false;
    });
  }

  
  $(".scroll-down").click(function(){
    $("#fullpage > div").addClass("scrolled");
    const pg = $(this).parent().index();
    $(".pagination li").eq(pg).addClass("active").siblings("li").removeClass("active");

  });
  $("#fullpage").on("mousewheel", function(e){
    if(e.deltaY < 0){
      $(".ex").addClass("scrolled");
      const pg = $(this).index();
      $(".pagination li").eq(pg).addClass("active").siblings("li").removeClass("active");
    }
  });
  $(window).mousewheel(function(e){
    if($(window).scrollTop() == 0 && e.deltaY > 0){
      $("#fullpage > div").removeClass("scrolled");
    }
    const pg = $(this).index();
    $(".pagination li").eq(pg).addClass("active").siblings("li").removeClass("active");
  });

});