<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penzión</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img src="images/slide/penzion_logo.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <?php echo ($_SERVER['REQUEST_URI'] == '/index.php') ? '<li class="active">' : '<li>' ?><a href="index.php">Domov</a></li>
                    <?php echo ($_SERVER['REQUEST_URI'] == '/report.php') ? '<li class="active">' : '<li>' ?><a href="report.php">Kniha návštev</a></li>
                    <?php echo ($_SERVER['REQUEST_URI'] == '/contact.php') ? '<li class="active">' : '<li>' ?><a href="contact.php">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
