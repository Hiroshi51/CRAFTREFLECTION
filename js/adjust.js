$(document).ready(function(){
    //Variables Declaration
    var $movie = $('.movieItemWrapper');
    var $movieText = $('.movieText');
    var $movieTitle = $('.movieTitle');
    var $movieContents = $('.movieContents');
    
    //adjust element's Height and Width
    function adjust(){ 
        $movie.height($movie.width()*0.56); 
        $movieText.height($movie.height());
    }    
    function sameHeight(){ 
        var maxHeight1 = 0;
        var maxHeight2 = 0;
        $movieContents.each(function(){
            if(maxHeight1 < $(this).height()){
                maxHeight1 = $(this).height();
            }
        });
        setMaxHeight($movieContents,maxHeight1);
        
        $movieTitle.each(function(){
            if(maxHeight2 < $(this).height()){
                maxHeight2 = $(this).height();
            }
        });
        setMaxHeight($movieTitle,maxHeight2);  
    }
    function setMaxHeight($selector,height){
        $selector.each(function(){$(this).height(height);});
    }
                            
                            
    
    //Listening to window resize action
    $(window).on('load',function(){
        adjust();
        sameHeight();
    });
    $(window).on('resize',function(){
        adjust();

    });
    
  
});