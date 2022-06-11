<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100vh;">
<div style="width: 1000px; height: 500px; display: flex; flex-wrap: wrap; overflow: hidden;">
    <?php for ($i = 1; $i <= 1000; $i++) {
        $r = mt_rand(100,255);
        $g = mt_rand(100,255);
        $b = mt_rand(100,255);
        ?>
        <div
            style="background-color: rgb(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>); display: block; flex-grow: 1;"
        ><?php echo substr(md5(mt_rand()), 0, 2); ?></div>
    <?php } ?>
</div>
</body>
</html>
