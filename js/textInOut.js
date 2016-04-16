(function ( $ ) {
    $.fn.textInOut = function() {
        
        //animation Event as the mouse enters and leaves the movie 
        this.mouseenter(function(){     
            if(this.flag != 1){
              this.flag = 1;
            　var $target = $(this).siblings('.movieItemWrapper').children('.movieText');
            　$target.animate({top:"0px"},400);
                $target.siblings('p.movieDetail').fadeIn();
               changeflag(this);  
            } 
         }).mouseleave(function(){  
            var $target = $(this).siblings('.movieItemWrapper').children('.movieText');
            $target.siblings('p.movieDetail').hide();
            $target.animate({top:"100%"},400);                            
        });
        
        function changeflag($this){
            var done = setTimeout(function(){$this.flag = 0;},500);    
        }
    }
}( jQuery ));