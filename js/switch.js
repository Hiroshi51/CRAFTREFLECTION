<script> 
//Resposive
var scriptTag = document.createElement("script");
$(function(){
	//window width default
	var egwidth = $(window).width();
	if(egwidth <= 640){
		scriptTag.src = "./textInOut-sp.js";
		document.getElementsByTagName("head")[0].appendChild(scriptTag);
	}else if(egwidth > 640){
		scriptTag.scr = "./textInOut-pc.js";
		document.getElementsByTagName("head")[0].appendChild(scriptTag);
	}

	//Window width Resize with PC
	var timer = false;
	$(window).resize(function(){
        if(timer !== false){
        	clearTimeout(timer);
        }
        timer = setTimeout(function(){
        	var egwidth = $(window).width();
        	if(egwidth <= 640){
        		scriptTag.src="./textInOut-sp.js";
        		document.getElementsByTagName("head")[0].appendChild(scriptTag);
        	}else if(egwidth > 640){
        		scriptTag.src = "./textInOut-pc.js";
        		document.getElementsByTagName("head")[0].appendChild(scriptTag);
        	}

        },200);
	});
});
</script>


