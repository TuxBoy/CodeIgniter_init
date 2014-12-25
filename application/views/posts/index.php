<div class="row">
  <div class="col-md-8">
    <h1>Blog</h1>

    <?php if ($this->session->flashdata('posts_success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('posts_success'); ?>
        </div>
    <?php endif ?>
    <?php if ($this->session->flashdata('post_delete')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('post_delete'); ?>
        </div>
    <?php endif ?>
    <a href="<?= site_url('posts/post'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Ajouter un article</a>

    <?php foreach ($posts as $k => $post): ?>
       <div class="row">
            <div class="col-md-6">
                <h2>
                   <a href="<?= site_url('posts/view/'. $post->id); ?>"><?= $post->name; ?></a>
                       </h2>
            </div>
           <div class="col-md-3">
               <a href="<?= site_url('posts/post/'. $post->id); ?>">Editer</a>
           </div>
           <div class="col-md-3">
               <a href="<?= site_url('posts/delete/'. $post->id); ?>" onclick="return confirm('Etes vous sûr de vouloir supprimer cet article ?');">Supprimer</a>
           </div>
       </div>


        <p><?= $post->content; ?></p>
    <?php endforeach ?>

    <nav><?= $pagination; ?></nav>
  </div>
    <div class="col-md-4">
      <?= $sidebar; ?>
    </div>
</div>


