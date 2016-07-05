<h1><?=$hello_header; ?></h1>
<div>
    <?php foreach ($hello_content as $item): ?>
        <p>
            <a href="/site/view/<?php echo $item->id ?>"><?php echo $item->title ?></a>
        </p>
    <?php endforeach ?>
</div>