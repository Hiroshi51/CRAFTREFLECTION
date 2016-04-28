(function ( $ ) {
    $.fn.textInOut = function() {
        
         var size = this.length;
         var animArray = new Array();
         for(var i = 0; i < size; i++){
             animArray.push(1);
             this.eq(i).on('click',{value : i},function(event){clickEvent(event,$(this));});
         }
         function clickEvent(event,$this){
            var j = event.data.value;  
            var $target = $this.siblings('.movieItemWrapper').children('.movieText');       
            if(animArray[j] === 1){
                $target.stop().animate({top:"0px"},300,function(){
                $target.siblings('p.movieDetail').stop().fadeIn(200);
                });
            }
            else if(animArray[j] === -1){
                $target.siblings('p.movieDetail').stop().fadeOut(200,function(){
                $target.stop().animate({top:"100%"},300);  
               　});
            } 
            animArray[j] = animArray[j] * -1;
            console.log(animArray);
            }
    }
}( jQuery ));

         