<ul>    
    <?php foreach (array_reverse($discussion->getPosts()) as $key => $post) : ?>
        <li>
            <strong><?php echo \Jirkae\Discussion::strip($post->name); ?></strong>
            <span><?php echo date('d. m. Y H:i', $post->timestamp); ?></span>
            <p>
                <?php echo \Jirkae\Discussion::strip($post->text); ?>
                <?php if(isset($_GET[Jirkae\Discussion::SECRET_KEY]) && $_GET[Jirkae\Discussion::SECRET_KEY] == Jirkae\Discussion::SECRET): ?>                    
                    <a href="<?php echo $_SERVER['REQUEST_URI'] . (strpos($_SERVER['REQUEST_URI'], '?') === FALSE ? '?' : '&') . 'deletePost='.$key; ?>#discussion">smazat</a>
                <?php endif; ?>                    
            </p>            
        </li>
    <?php endforeach; ?>
</ul>
<?php
    foreach ($discussion->getErrors() as $error) :
?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php 
    endforeach;
?>
<form method="POST">
    <input 
        type="text" 
        name="name" 
        placeholder="Vaše jméno"
        <?php if(isset($_POST['name'])){echo 'value="'.$_POST['name'].'"';} ?>
    >
    <textarea 
        name="text" 
        placeholder="Text příspěvku" 
        rows="7"><?php if(isset($_POST['text'])){echo $_POST['text'];} ?></textarea>
    <input type="submit" name="discussion_submit" class="submit" value="Odeslat">
    <input type="hidden" name="discussion_name" value="<?php echo $discussion->name; ?>">
    <input type="hidden" name="secure_q" value="rt<?php echo rand(100, 999); ?>xol<?php echo rand(100, 999); ?>pl">
    <input type="hidden" name="secure_a" value="">
</form>