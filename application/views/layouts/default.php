<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title><?= $template_settings['title']; ?></title>
	<link rel="stylesheet" href="/static/main.css"/>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid no-padding">
        <div class="navbar-header">
            <a class="navbar-brand" href="/index.php">AB Test</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/index.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (is_null($user)) { ?>
                    <li><a href="/index.php/auth/login">Login</a></li>
                <?php } else { ?>
                    <li><a href="/index.php/auth/logout">Logout (<?= $user->username; ?>)</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="default-layout">
	<?= $content ?>
</div>

<!-- @todo: CDN domain -->
<script type="application/javascript" src="/static/main.js"></script>
<div class="navbar-fixed-bottom">
    <footer class="footer">
        AB-test &copy; 2015<br>
        <a href="https://github.com/pavel-ms/kohana-ab-test" target="_blank">GitHub Page</a>
    </footer>
</div>
</body>
</html>