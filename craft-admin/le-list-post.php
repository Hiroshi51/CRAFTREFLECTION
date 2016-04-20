<div id="managePosts">
    <div id="showList">
        <?php while($listData = mysqli_fetch_assoc($listRecord)) :?>
        <dt><?php echo htmlspecialchars($listData['title']); ?></dt>   
        <dd><?php echo htmlspecialchars($listData['detail']); ?> <span>EDIT</span><a href="le-admin-frame.php?page=le-delete-post&id=<?php echo htmlspecialchars($listData['id']); ?>">DELETE</a></dd> 
        <?php endwhile; ?>
    </div>
    
        

</div>
