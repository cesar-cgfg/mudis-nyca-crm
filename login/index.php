<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Login</title>
<meta name="description" content="">
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/login.css">
<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<script src="js/libraries/modernizr-2.5.3.min.js"></script>
</head>
<body>
    <header></header>
    <section>
        <form action="../controllers/login/LoginController.php" method="post">
            <label for="usr">Usuario: </label> 
            <input type="text" name="usr" id="usr" /> 
            
            <label for="pwd">Contraseña : </label>
            <input type="password" name="pwd" id="pwd" /> 
            
            <input type="submit" name="entrar" value="Entrar" />
        </form>
    </section>
    <footer> </footer>
</body>
</html>
