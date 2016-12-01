<!DOCTYPE html>
<html>
<head>
<title>Welcome to Makarov Docker NGINX!</title>
<style>
    body {
        width: 45em;
		margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Welcome to Makarov Docker NGINX!</h1>
<p>If you see this page, the NGINX DOCKER web server is successfully installed and
working with PHP FPM 7. Further configuration is NOT required :D</p>

<p>For online documentation and support please refer to
<a href="http://nginx.org/">nginx.org</a>.<br/>
Commercial support is available at
<a href="http://nginx.com/">nginx.com</a>.</p>

<p><em>Thank you for using nginx.</em></p>
<br>
<div class="phpinfo">
	<?php echo phpinfo(); ?>
</div>
</body>
</html>
