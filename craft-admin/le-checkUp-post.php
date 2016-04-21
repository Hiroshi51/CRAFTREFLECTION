<div>
    <form action="" method="post">
        <input type="hidden" name="action" value="submit"/>
        <dl>
        <dt>日付</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['created']); ?></dd>    
        <dt>ムービータイトル</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['title']); ?></dd>
        <dt>YouTube埋め込みリンク</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['tube-link']); ?></dd>  
        <dt>ムービー説明</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['detail']); ?></dd>  
        <dt>ムービーカテゴリー</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['category']); ?></dd>  
        <dt>編集中・投稿選択</dt>
        <dd><?php echo htmlspecialchars($_SESSION['craft']['ready']); ?></dd>  
        </dl>
        <a href="le-admin-frame.php?page=le-create-post&action=rewrite">投稿へ戻る</a>
        <input type="submit" value="更新する"/>
    </form>
</div>