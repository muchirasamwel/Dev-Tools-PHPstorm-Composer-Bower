<?php
require_once __DIR__ . "/vendor/autoload.php";

use smbSpace\Hello;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer Test</title>
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="d-flex justify-content-around">
    <img src="assets/compsr.png" alt="">
    <div class="w-50">
        <h3 class="text-primary">Message from Hello Class </h3>
        <h2><?php echo Hello::hi(); ?></h2>
        <h3 class="text-primary">Message from Hello Class international </h3>
        <ul class="bg-dark text-white font-weight-bold">
            <?php foreach (Hello::helloGlobal() as $greet) {
                echo "<li> $greet</li>";
            } ?>
        </ul>
        <p>Above data has been loaded from PHP class Managed by Composer</p>
        <div class="mb-4"><span> Bower Jquery Status</span> <span class="jstate bg-dark text-white p-2"></span></div>
        <div><span>Bower Bootstrap Status</span> <span class="bg-danger text-white p-3"> You see am red. Am loaded </span></div>
    </div>
</div>
</body>
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script>
$(document).ready(function () {
    $(".jstate").text("JQuery Loaded :)");
});
</script>
</html>
