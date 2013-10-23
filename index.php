<?php
require('one.php');
$content = page_content();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>One - A static site generator</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li><a href="<?php print site_url(); ?>">Home</a></li>
            <li><a href="<?php print site_url(); ?>docs">Docs</a></li>
            <li><a href="<?php print site_url(); ?>demo/page1">Demo page 1</a></li>
            <li><a href="<?php print site_url(); ?>demo/page2">Demo page 1</a></li>
        </ul>
        <h3 class="text-muted">One - Static site generator</h3>
    </div>
    <div class="row marketing">
        <div class="col-lg-12">
            <?php print $content; ?>

        </div>

    </div>

    <div class="footer">
        <p>Powered by <a class="muted" href="https://github.com/microweber/one">One</a></p>
    </div>

</div>
</body>
</html>