<div id="managePosts">
    <div id="showList">
        <?php while($listData = $listRecord->fetch(PDO::FETCH_ASSOC)) :?>
        <dt><?php echo htmlspecialchars($listData['title']); ?></dt>   
        <dd><?php echo htmlspecialchars($listData['detail']); ?> <a href="le-admin-frame.php?page=le-update-post&id=<?php echo hsc($listData['id']); ?>">EDIT</a><a href="le-admin-frame.php?page=le-delete-post&id=<?php echo htmlspecialchars($listData['id']); ?>">DELETE</a></dd> 
        <?php endwhile; ?>
    </div>
    
        

</div>
