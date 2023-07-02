$(function(){
  /* Fullpage Scroll Event */
  const div = $(".ex").length;
  for(let i=0; i<div; i++){
    $(".pagination").append("<li>●</li>")
  }
  $(".pagination li:first").addClass("active");

  $(".ex").mousewheel(function(e){
    if(e.deltaY < 0){
      let nextSection = $(this).next().offset().top;

      $("html, body").stop().animate({
        scrollTop: nextSection
      }, 1000)

      const Nextpg = $(this).index()+1;
      $(".pagination li").eq(Nextpg).addClass("active").siblings("li").removeClass("active");
    } else{
      let prevSection = $(this).prev().offset().top

      $("html, body").stop().animate({
        scrollTop: prevSection
      }, 1000)

      const Prevpg = $(this).index()-1;
      $(".pagination li").eq(Prevpg).addClass("active").siblings("li").removeClass("active");
    }
  });

  $(".pagination li").click(function(){
    const pg = $(this).index();
    const cont = $(".ex").eq(pg).offset().top;

    $("html, body").stop().animate({
      scrollTop: cont
    }, 1000)

    $(this).addClass("active").siblings("li").removeClass("active");
  })

  $(".scroll-down").click(function(){
    let nextSection = $(this).parent().next().offset().top;

      $("html, body").stop().animate({
        scrollTop: nextSection
      }, 1000)

      const Nextpg = $(this).parent().index()+1;
      $(".pagination li").eq(Nextpg).addClass("active").siblings("li").removeClass("active");
  })
});