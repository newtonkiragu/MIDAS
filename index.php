<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MTTS</title>
    <link rel="icon" type="img/" href="static/img/5smMvRlz_400x400.jpg">
    <link rel="stylesheet" href="static/css/normalize.min.css">
    <link rel="stylesheet" href="static/css/w3.css">
    <link rel="stylesheet" href="static/css/indexstyle.css">
</head>

<body>
<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="index.php">State Depertment Of Transport Training System</a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="admin/">Admin Login</a>
                </li>

                <li>
                    <a href="app/">Apply for attatchment</a>
                </li>

            </ul>
        </nav>
    </div>
</section>


<div id="SLIDE_BG"></div>
<!--h1>WELCOME</h1-->
<div class="w3-content w3-display-container">
    <img class="mySlides" src="static/img/gettyimages-697051078-2048x2048.jpg" style="width:100%">
    <img class="mySlides" src="static/img/gettyimages-1005938136-2048x2048.jpg" style="width:100%">
    <img class="mySlides" src="static/img/gettyimages-1005941606-2048x2048.jpg" style="width:100%">
    <img class="mySlides" src="static/img/gettyimages-1042519992-2048x2048.jpg" style="width:100%">
</div>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000);
    }

</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="static/js/script.js"></script>

</body>

</html>