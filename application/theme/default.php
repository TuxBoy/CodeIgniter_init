<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?= $charset; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Un site pour tester le framework CodeIgniter">
    <meta name="author" content="Benoit mallo">

    <title><?= $title; ?></title>

    <?php foreach ($css as $url): ?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?= $url; ?>">
    <?php endforeach; ?>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url('pages/index'); ?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?= active_url('pages'); ?>><a href="#">Home</a></li>
                <li <?= active_url('posts'); ?>><a href="<?= site_url('posts/index'); ?>">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 50px;">

    <div class="starter-template">
        <?= $output; ?>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php foreach ($js as $url): ?>
    <script type="text/javascript" src="<?= $url; ?>"></script>
<?php endforeach; ?>
</body>
</html>
