<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title><?= $template_settings['title']; ?></title>
	<link rel="stylesheet" href="/static/main.css"/>
</head>
<body>

<div class="default-layout">
	<?= $content ?>
</div>

<!-- @todo: CDN domain -->
<script type="application/javascript" src="/static/main.js"></script>

</body>
</html>