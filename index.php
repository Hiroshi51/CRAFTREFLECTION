<?php
require('craft-admin/le-db-connect.php');
$prepare = $dbh->prepare('SELECT * FROM craft_movie WHERE ready=? ORDER BY id');
$prepare->bindValue(1,'yes',PDO::PARAM_STR);
$prepare->execute();

?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta content='width=device-width, initial-scale=1.0' name='viewport' />
        <title>映像配信｜CRAFT REFLECTION</title>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style-temp.css">
        <link rel="stylesheet" media="(max-width: 480px)" href="smart.css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/adjust.js"></script>

        <script> 
            //Resposive
            var scriptTag = document.createElement("script");
        
            $(function(){
                //window width default
                var egwidth = $(window).width();
                if(egwidth <= 640){
                    scriptTag.src = "js/textInOut-sp.js";
                    document.getElementsByTagName("head")[0].appendChild(scriptTag);
                }else if(egwidth > 640){
                    scriptTag.src = "js/textInOut-pc.js";
                    document.getElementsByTagName("head")[0].appendChild(scriptTag);
                }
            });
           
       </script>
    </head>
    <body>
        <header role="banner">
            <div id="topWhite">
                <h1>        </h1>
            </div>
            <div id="headerWrapper">
                <div id="inngerHeader">
                    <p id="topLogo"><img src="img/common/topLogo.png"/></p>
                    <p id="topfacebook"><img src="img/common/facebookIcon.jpg"/></p>
                    <p id="topyoutube"><img src="img/common/youtubeIcon.jpg"/></p>   
                </div>  
            </div>
            <nav>
                <div id="navWrapper">
                    <ul id="globalNavi">
                        <a><li>ABOUT</li></a>
                        <a><li class="middleMenu">GREETING</li></a>
                        <a><li>CONTACT</li></a>
                    </ul>          
                </div>
            </nav>
        </header>
        <div id="sliderWrapper">
            <div id="slider">  
            </div>
        </div>
        
        <main role="main">
            <section>
                <div id="mainWrapper">
                    <h2>Movie Archive</h2>            
                    <div id="movieWarapper" class="clearfix" >
                        <?php while($data = $prepare->fetch(PDO::FETCH_ASSOC)) :?>
                        
                        <div class="movieContents">  
                            <div class="movieItemWrapper">
                               
                                <div class="movieText"></div>
                                <p class="movieDetail"><span class="subtitle">Detail</span>
                                <span><?php echo htmlspecialchars($data['detail']); ?></span></p>
                                <?php echo ($data['tube_link']); ?>
                            </div>
                            <h3 class="movieTitle"><?php echo htmlspecialchars($data['title']); ?></h3>
                        </div>
                        
                        <?php endwhile; ?>
                    </div>
                    <div id="pageNav"><span class="current">1</span><span>2</span></div>
                </div>  
            </section>
            
        </main>
        <footer>
            <div id="footerWrapper">
            </div>
        </footer>
    </body>

</html>
