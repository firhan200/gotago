$(document).ready(function(){
    $("#toggle-mobile-menu").click(function(){
        if($("#mobile-menu").hasClass("h-100")){
            $("#mobile-menu").removeClass("h-100");
            $("#mobile-menu").addClass("h-0");
        }else{
            $("#mobile-menu").removeClass("h-0");
            $("#mobile-menu").addClass("h-100");
        }
    })
})