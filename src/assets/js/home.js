$(window).scroll(function() {
 //projects_section
 var animatedText = $(".animatedText");
 if(animatedText.length!=0){
     for(let i = 0; i<animatedText.length; i++){
        var top_of_element = animatedText[i].offsetTop;
        var bottom_of_element = animatedText[i].offsetTop + animatedText[i].outerHeight;
        var top_of_screen = $(window).scrollTop();
        var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
        if((bottom_of_screen > top_of_element) && (top_of_screen < top_of_element)){
        
            
        animatedText[i].classList+=" show"

            } 
     }
   
   }
});