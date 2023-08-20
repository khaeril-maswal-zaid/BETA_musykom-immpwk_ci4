<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title><?= $title ?></title>

    <link rel="icon" href="/assets/img/web/pp.png" />

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- styles for this Bootstrap -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link href="/assets/css/sidebars.css" rel="stylesheet">
    <link href="/assets/css/signin.css" rel="stylesheet">

    <!-- styles for Columhightchart -->
    <link href="/assets/css/columhightchart.css" rel="stylesheet">

    <!-- styles manual ADMIN -->
    <link href="/assets/css/styleadmin.css" rel="stylesheet">


</head>

<body class="<?= $classbody ?>">

    <?= $this->include($templatelayout[0]); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include($templatelayout[1]); ?>


    <!-- Optional JavaScript; -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Bootstrap fitur-->
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/sidebars.js"></script>

</body>

</html>