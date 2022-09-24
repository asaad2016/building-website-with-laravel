$(document).ready(function () {


 $("#togglecollapse").click(function (){
        if($("body").hasClass("colapse")==true){
           $("body").removeClass("colapse");
           }
           else{
                  $("body").addClass("colapse");
           }

    });
 $(".app_naviigation li a").hover(function () {
 	if($(".app_naviigation li a i").next().hasClass("submenu")){
 		$(".submenu").next().slideToggle(500);
 	}
 	

 	});
 $(".app_naviigation li a").hover(function () {
 	if($(this).next().hasClass("submenu")){
 		$("submenu").hide(50);
 	$(this).next().slideDown(100);

 	
	}
 	

 	});
	 $("a").click(function () {
	 	$(this).addClass("selected");

	 });
	 $("span").click(function () {
	 	$(this).addClass("selected");

	 });
	 $("#asaad").click(function (){
	 	$(this).select();
	 });

	$("#changelang").click(function (){
	$("body").toggleClass("change");
});
$(".confirm").click(function () {
	 return confirm("Are You Sure/n To Delete");

});
	