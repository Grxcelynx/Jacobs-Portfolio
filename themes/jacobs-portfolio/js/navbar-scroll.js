jQuery(document).ready(function($){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
        $(".site-header").css("background-color" , "#F8F7F9");
        }

        else{
            $(".site-header").css("background-color" , "transparent");  	
        }
    })
})
