<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/General.css">
    <title>Camagru</title>
</head>
<body>
    <div id="header">
        <p>Header</p>
    </div>
    <div id="center">
        <?= $content ?>
    </div>
    <div id="footer">
        <div class="social-container">
            <a href="https://www.instagram.com/?hl=fr">
                <img src="Pictures/Instagram.png" alt="Instagram Logo" class="social">
            </a>
        </div>
        <div class="social-container">
            <a href="https://www.facebook.fr/">
                <img src="Pictures/Facebook.png" alt="Facebook Logo" class="social">
            </a>
        </div>
        <div class="social-container">
            <a href="https://www.twitter.fr/">
                <img src="Pictures/Twitter.png" alt="Twitter Logo" class="social">
            </a>
        </div>
        <h3>© lbarthon 2019</h3>
    </div>
</body>
</html>