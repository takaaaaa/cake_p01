<!DOCTYPE HTML>
<html lang="utf-8">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->css('cake.cakep02');
        echo $scripts_for_layout;
    ?>
</head>
<body>
    <div id="container">
        <div id="header">レイアウトの練習</div>
        <div id="content">
            <?php echo $content_for_layout; ?>
        </div>
        <div id="footer">レイアウトの練習</div>
    </div>
</body>
</html>