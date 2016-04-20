<div>
下記投稿を削除します。
</div>

<dl>
<dt>タイトル</dt>
<dd><?php echo hsc($deleteItemData['title']); ?></dd>
<dt>動画</dt>
<dd><?php echo $deleteItemData['tube_link']; ?></dd>
<dt>説明</dt>
<dd><?php echo hsc($deleteItemData['detail']); ?></dd>
</dl>

<a href="http://localhost:8888/craft/craft-admin/parts/le-do-delete.php?id=<?php echo hsc($deleteItemData['id']); ?>">OK</a>
<a href="">NO</a>


