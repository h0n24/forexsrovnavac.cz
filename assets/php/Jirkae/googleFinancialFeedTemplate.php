<h3>Zprávy</h3>
<ul class="row">      
    <?php $i = 0; foreach($feed['items'] as $item): ?>        
        <li class="col-sm-4">
        
            <a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
            <p><?php echo $item['description']; ?></p>
            <small><?php echo $item['pubDate']; ?></small>
        </li>
        <?php 
          $i++;
          if ($i >= 3) {break;}
        ?>
    <?php endforeach; ?>
</ul>