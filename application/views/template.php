<!DOCTYPE html>
<html lang="<?php echo I18n::$lang ?>">
<head>
    <meta charset="utf-8">
    <title>Morris Baseball League Association</title>
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
    <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</head>
<body>
	<?php echo $content ?>
</body>
</html>