$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
        $(".site-header").css("background" , "greynav");
        }

        else{
            $(".site-header").css("background" , "transparent");  	
        }
    })
})
