
<?php foreach (array_reverse($discussion->getAllPosts()) as $key => $post) : ?>
    <li>
        <strong><?php echo \Jirkae\Discussion::strip($post->name); ?></strong>
        <span><?php echo date('d. m. Y H:i', $post->timestamp); ?></span>
        <p>
            <?php echo \Jirkae\Discussion::strip($post->text); ?>
            <?php if(isset($_GET[Jirkae\Discussion::SECRET_KEY]) && $_GET[Jirkae\Discussion::SECRET_KEY] == Jirkae\Discussion::SECRET): ?>                    
            <form method="POST">
                <input type="hidden" name="file" value="<?php echo $post->file; ?>">
                <input type="hidden" name="key" value="<?php echo $post->key; ?>">
                <input type="submit" name="deletePost" value="Smazat"></input>
            </form>
            <?php endif; ?>                    
        </p>            
    </li>
<?php endforeach; ?>