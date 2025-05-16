<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Starbucks Coffee Website Landing Page</title>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="./logo.png" class="logo"></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="https://www.starbucks.in/ordering">Menu</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </header>
        <div class="container">
            <div class="text-box">
                <h2>Its not just a Coffee <br>Its  <span>Starbucks</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor modi consequatur nulla, fugit odit rerum quaerat illo at! Nihil velit tempore debitis. Doloribus quasi perspiciatis fuga nulla aspernatur necessitatibus adipisci.</p>
                <a href="3">learn More</a>
            </div>
            <div class="img-box">
                <img src="./img1.png" class="starbucks" alt="">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="./thumb1.png" onclick="imgSlider('img1.png');changeCircleColor('#017143')"></li>
            <li><img src="./thumb2.png" onclick="imgSlider('img2.png');changeCircleColor('#0eb7495')"></li>
            <li><img src="./thumb3.png" onclick="imgSlider('img3.png');changeCircleColor('#d752b1')"></li>
        </ul>
        <ul class="social">
            <li><a href="https://www.facebook.com/Starbucks/"><img src="./facebook.png"></a></li>
            <li><a href="https://www.instagram.com/starbucks/?hl=en"><img src="./instagram.png"></a></li>
            <li><a href="https://x.com/StarbucksIndia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="./twitter.png"></a></li>
        </ul>
    </section>
</body>
</html>