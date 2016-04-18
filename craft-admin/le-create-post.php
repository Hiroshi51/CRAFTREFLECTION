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
                    <input name="title" type="text" id="title" size="50" maxlength="50" 
                     value="<?php echo htmlspecialchars($_POST['title'],ENT_QUOTES,'UTF-8'); ?>" />
                </dd> 
                <dt>
                    <label for="tube-link">YouTube埋め込みリンク</label>
                </dt>
                <dd>
                    <textarea name="tube_link" id="tube_link" rows="20" cols="50"><?php echo htmlspecialchars($_POST['tube-link'],ENT_QUOTES,'UTF-8'); ?></textarea>
                </dd>   
                <dt>
                    <label for="detail">ムービー説明</label>
                </dt>
                <dd>
                    <textarea name="detail" id="detail" rows="20" cols="50"><?php echo htmlspecialchars($_POST['detail'],ENT_QUOTES,'UTF-8'); ?></textarea>
                </dd>  
                <dt>
                    ムービーカテゴリー
                </dt>
                <dd>
                    <p>
                        <input name="category" type="radio" id="category01" value="PV" 
                         <?php if(htmlspecialchars($_POST['category'],ENT_QUOTES,'UTF-8') == "PV"){
                            echo 'checked="checked"';} ?> />
                        <label for="category01">PV</label>
                    </p>   
                    <p>
                        <input name="category" type="radio" id="category02" value="MV" 
                         <?php if(htmlspecialchars($_POST['category'],ENT_QUOTES,'UTF-8') == "MV"){
                            echo 'checked="checked"';} ?> />
                        <label for="category02">MV</label>
                    </p>    
                </dd>
                <dt>
                    編集中・投稿選択
                </dt>
                <dd>
                    <p>
                        <input name="ready" type="radio" id="ready-yes" value="yes" 
                         <?php if(htmlspecialchars($_POST['ready'],ENT_QUOTES,'UTF-8') == "yes"
                                   || htmlspecialchars($_POST['ready'],ENT_QUOTES,'UTF-8') == ""){echo 'checked="checked"';} ?> />
                        <label for="ready-yes">投稿する</label>
                    </p>   
                    <p>
                        <input name="ready" type="radio" id="ready-no" value="no" 
                         <?php if(htmlspecialchars($_POST['ready'],ENT_QUOTES,'UTF-8') == "no"){
                            echo 'checked="checked"';} ?> />
                        <label for="ready-no">編集中へ保存</label>
                    </p>    
                </dd>   
            </dl>
            <input type="submit" value="更新"/>
        </form>  
