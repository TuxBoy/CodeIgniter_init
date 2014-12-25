<h4>Catégorie</h4>
<div class="list-group">
<?php foreach ($categories as $k => $category): ?>
    <a href="<?= site_url('posts/index/'.$category->id); ?>" class="list-group-item"><?= $category->title; ?></a>
<?php endforeach ?>
</div>
