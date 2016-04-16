<?php
    //check whetehr user click Send
    if(!empty($_POST)){
        $requireItem = array("name","tube-link","category","ready");
        $error = array(); 
        foreach ($_POST as $key => $value){
            if($value == ""){
                $error[$key] = "blank";
                $notCompleted = true;
            }  
        }
        if($notCompleted != true){
            $_SESSION['craft'] = $_POST;
            header('location: le-check-post.php');
            exit();
        }
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    </head>
    <body>
        <form action="" method="post">
            <dl>
                <dt>
                    <label for="created">日付</label>
                </dt>
                <dd>
                    <?php date_default_timezone_get('Japan'); ?>
                    <input name="created" type="text" id="date" size="20" maxlength="10" value="<?php echo date('Y-m-d'); ?>" />
                </dd>    
                <dt>
                    <label for="created">ムービータイトル</label>
                </dt>
                <dd>
                    <input name="title" type="text" id="title" size="50" maxlength="50" />
                </dd> 
                <dt>
                    <label for="tube-link">YouTube埋め込みリンク</label>
                </dt>
                <dd>
                    <textarea name="tube-link" id="tube-link" rows="20" cols="50"></textarea>
                </dd>   
                <dt>
                    <label for="detail">ムービー説明</label>
                </dt>
                <dd>
                    <textarea name="detail" id="detail" rows="20" cols="50"></textarea>
                </dd>  
                <dt>
                    ムービーカテゴリー
                </dt>
                <dd>
                    <p>
                        <input name="category" type="radio" id="category01" value="PV" />
                        <label for="category01">PV</label>
                    </p>   
                    <p>
                        <input name="category" type="radio" id="category02" value="MV" />
                        <label for="category02">MV</label>
                    </p>    
                </dd>
                <dt>
                    編集中・投稿選択
                </dt>
                <dd>
                    <p>
                        <input name="ready" type="radio" id="ready-yes" value="yes" checked="checked"/>
                        <label for="ready-yes">投稿する</label>
                    </p>   
                    <p>
                        <input name="ready" type="radio" id="ready-no" value="no" />
                        <label for="ready-no">編集中へ保存</label>
                    </p>    
                </dd>   
            </dl>
            <input type="submit" value="更新"/>
        </form>  
    </body>    
</html>    