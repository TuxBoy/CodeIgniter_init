<h1>Connexion</h1>

<p><?= $this->session->flashdata('login'); ?></p>
<?= validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?= form_open('pages'); ?>
<form action="" class="form" method="post">
    <div class="form-group">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" class="form-control" value="<?= set_value('pseudo'); ?>">
        <div class="form-group"><?= form_error('pseudo'); ?></div>
    </div>

    <div class="form-group <?= (count(form_error('mdp')) > 0) ? 'has-error' : ''; ?>">
        <label for="mdp">Pseudo :</label>
        <input type="password" name="mdp" class="form-control" value="">
         <label class="control-label"><?= form_error('mdp'); ?></label>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>