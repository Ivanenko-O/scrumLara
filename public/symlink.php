<?php
$target = '../storage/app/public/index.php';
$link = 'storage';
symlink($target, $link);
?>