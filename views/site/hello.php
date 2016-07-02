<h1><?=$hello_header; ?></h1>
<p>
    <ul>
        <?php foreach ($hello_content as $item): ?>
            <li><?php echo $item->title ?></li>
        <?php endforeach ?>

    </ul>
</p>