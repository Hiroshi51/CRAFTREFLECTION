        <form action="" method="post">
            <dl>
                <dt>
                    <label for="created">日付</label>
                </dt>
                <dd>
                    <?php date_default_timezone_get('Japan'); ?>
                    <input name="created" type="text" id="date" size="20" maxlength="10" value="<?php echo hsc($deleteItemData['created']); ?>" />
                </dd>    
                <dt>
                    <label for="created">ムービータイトル</label>
                </dt>
                <dd>
                    <input name="title" type="text" id="title" size="50" maxlength="50" 
                     value="<?php echo hsc($deleteItemData['title']); ?>" />
                </dd> 
                <dt>
                    <label for="tube-link">YouTube埋め込みリンク</label>
                </dt>
                <dd>
                    <textarea name="tube_link" id="tube_link" rows="20" cols="50"><?php echo hsc($deleteItemData['tube_link']); ?></textarea>
                </dd>   
                <dt>
                    <label for="detail">ムービー説明</label>
                </dt>
                <dd>
                    <textarea name="detail" id="detail" rows="20" cols="50"><?php echo hsc($deleteItemData['detail']); ?></textarea>
                </dd>  
                <dt>
                    ムービーカテゴリー
                </dt>
                <dd>
                    <p>
                        <input name="category" type="radio" id="category01" value="PV" 
                         <?php if(hsc($deleteItemData['category']) == "PV"){
                            echo 'checked="checked"';} ?> />
                        <label for="category01">PV</label>
                    </p>   
                    <p>
                        <input name="category" type="radio" id="category02" value="MV" 
                         <?php if(hsc($deleteItemData['category']) == "MV"){
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
                         <?php if(hsc($deleteItemData['ready']) == "yes"
                                   || hsc($deleteItemData['ready']) == ""){echo 'checked="checked"';} ?> />
                        <label for="ready-yes">投稿する</label>
                    </p>   
                    <p>
                        <input name="ready" type="radio" id="ready-no" value="no" 
                         <?php if(hsc($deleteItemData['ready']) == "no"){
                            echo 'checked="checked"';} ?> />
                        <label for="ready-no">編集中へ保存</label>
                    </p>    
                </dd>   
            </dl>
            <input type="hidden" name="id" value="<?php echo hsc($deleteItemData['id']); ?>" />
            <input type="submit" value="更新"/>
        </form>  
