(function ( $ ) {
    $.fn.textInOut = function() {
        //animation Event as the mouse enters and leaves the movie 
        this.mouseenter(function(){     
           
             
                var $target = $(this).siblings('.movieItemWrapper').children('.movieText');
                $target.stop().animate({top:"0px"},400);
                $target.siblings('p.movieDetail').stop().fadeIn(400);
               
           
         }).mouseleave(function(){  
                var $target = $(this).siblings('.movieItemWrapper').children('.movieText');
                $target.siblings('p.movieDetail').stop().fadeOut(400);
                $target.stop().animate({top:"100%"},400);                        
        });
        
       
    }
     $('h3.movieTitle').textInOut();
}( jQuery ));