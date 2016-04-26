(function ( $ ) {
    $.fn.textInOut = function() {
        //animation Event as the mouse enters and leaves the movie 
        this.on('click',function(){  
            var $target = $(this).siblings('.movieItemWrapper').children('.movieText');   
            if(this.flag != 1){
                this.flag = 1;
                $target.stop().animate({top:"0px"},300,function(){
                $target.siblings('p.movieDetail').stop().fadeIn(200);

                });
               
            }else{
               
                $target.siblings('p.movieDetail').stop().fadeOut(200,function(){
                $target.stop().animate({top:"100%"},300);  
               


                });
         changeflag(this);  
            } 
        });
        function changeflag($this){
            var done = setTimeout(function(){$this.flag = 0;},10);    
        }
    }

    $('h3.movieTitle').textInOut();
     
}( jQuery ));

         