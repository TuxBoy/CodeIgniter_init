<h1>Ajouter un article</h1>
<?php if ($this->session->flashdata('posts_errors')): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <?= $this->session->flashdata('posts_errors'); ?>
    </div>
<?php endif ?>
<div class="row">
    <div class="col-md-6">
        <form action="<?= isset($post->id) ? base_url() . 'posts/post/'. $post->id : base_url() . 'posts/post/'; ?>" id="PostEditForm" method="post" role="form">
            <div class="form-group <?= form_error('name') ? 'has-error' : ''; ?>">
                <label for="name">Titre</label>
                <input type="text" name="name" value="<?= isset($post->name) ? $post->name : set_value('name'); ?>" id="name" class="form-control">
               <div class="control-label"><?= form_error('name'); ?></div>
            </div>
            <div class="form-group <?= form_error('slug') ? 'has-error' : ''; ?>">
                <label for="name">URL</label>
                <input type="text" name="slug" value="<?= isset($post->slug) ? $post->slug : set_value('slug'); ?>" id="slug" class="form-control">
               <div class="control-label"><?= form_error('slug'); ?></div>
            </div>
            <div class="form-group">
                <label for="categories">Catégorie</label>
                <select name="category_id" id="categories" class="form-control">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->id; ?>"><?= $category->title; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
           <div class="form-group <?= form_error('content') ? 'has-error' : ''; ?>">
                <label for="content">Contenu</label>
                <textarea name="content" id="content" class="form-control"><?= isset($post->content) ? $post->content : set_value('content'); ?></textarea>
                <div class="control-label"></div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>