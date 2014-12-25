<h1>Bonjour</h1>

<p><?= $this->session->flashdata('login'); ?></p>

<p><?= $textParse; ?></p>

<a href="<?= site_url(['pages', 'login']); ?>" class="btn btn-primary">Login</a>