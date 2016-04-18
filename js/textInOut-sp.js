(function ( $ ) {
    $.fn.textInOut = function() {
        //animation Event as the mouse enters and leaves the movie 
        this.on('click',function(){  
            var $target = $(this).siblings('.movieItemWrapper').children('.movieText');   
            if(this.flag != 1){
                this.flag = 1;
                $target.animate({top:"0px"},400);
                $target.siblings('p.movieDetail').fadeIn(400);
            }else{
               
                $target.siblings('p.movieDetail').fadeOut(400,function(){
                  //empty animation queue
                    $(this).queue([]);     
                  //stop animation
                    $(this).stop();  
                });
                $target.animate({top:"100%"},400,function(){
                  //empty animation queue
                    $(this).queue([]);     
                  //stop animation
                    $(this).stop();  
                });  
                changeflag(this);  
            } 
        });
        function changeflag($this){
            var done = setTimeout(function(){$this.flag = 0;},400);    
        }
    }

    $('h3.movieTitle').textInOut();
     
}( jQuery ));

         