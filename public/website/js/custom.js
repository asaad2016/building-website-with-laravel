$(document).ready(function () {
  /* $("#collapse").click(function () {
       if($(this).hasClass("collapsed")){
            $(".navbar").slideDown(150);
       }
       else{
            $(".navbar").slideUp(500);
       }
      
   })*/
    
    $(".navbar ul li").click(function () {
       
        $("body,html").animate({
           scrollTop:$("." + $(this).data("class")).offset().top,
           
            
        },2000);
        $(".annimate,.fadedown").delay(5000);
        
    });
    $(window).scroll(function () {
        $(".annimate,.fadedown").delay(5000);
    });
    
     $(".p-f a").click(function () {
       
        $("body,html").animate({
           scrollTop:$("." + $(this).data("class")).offset().top,
           
            
        },2000);
        $(".annimate,.fadedown").delay(5000);
        
    });
   var heightbox=0;
    $(".col-item").each(function () {
      if($(this).height() > heightbox){
        heightbox=$(this).height();
      }
    });
    $(".col-item").height(heightbox);
});