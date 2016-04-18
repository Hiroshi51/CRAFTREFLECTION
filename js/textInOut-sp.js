(function ( $ ) {
    $.fn.textInOut = function() {
        //animation Event as the mouse enters and leaves the movie 
        this.on('click',function(){  
            var $target = $(this).siblings('.movieItemWrapper').children('.movieText');   
            if(this.flag != 1){
                this.flag = 1;
                $target.animate({top:"0px"},400);
                $target.siblings('p.movieDetail').fadeIn();
            }else{
               
                $target.siblings('p.movieDetail').fadeOut();
                $target.animate({top:"100%"},400);  
                changeflag(this);  
            } 
        });
        function changeflag($this){
            var done = setTimeout(function(){$this.flag = 0;},600);    
        }
    }

    $('h3.movieTitle').textInOut();
     
}( jQuery ));

         