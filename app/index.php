<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> MTTS Registration</title>
    <link rel="icon" type="img/" href="../static/img/app/5smMvRlz_400x400.jpg">
    <link rel="stylesheet" href="../static/css/app/reset.min.css">
    <link rel="stylesheet" href="../static/css/app/style1.css">

</head>

<body>
<style type="text/css">
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #3b4148;
        font-family: 'Poppins', san serif;
        overflow: hidden;
        position: absolute;
        left: 570px;
        top: 10px;

    }

    /* Style the links inside the navigation bar */
    .topnav a {

        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #2581DC;
        color: white;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color: #2581DC;
        color: white;
    }
    label{
        color: white;
    }
</style>
<header>
    <div class="topnav">
        <a class="active" href="../">Home</a>
        <a href="../admin/login.php">Login</a>
        <a href="../admin/">admin</a>
    </div>
</header>
<br />

<br />
<form id="msform" action="sent.php" method="post" name="mainForm" enctype="multipart/form-data">

    <ul id="progressbar">
        <li class="active">Apply for attatchment</li>
        <li>Personal informatiion</li>
        <li>Upload Documents</li>
    </ul>

    <fieldset>
        <h2 class="fs-title">Apply for attatchment</h2>
        <h3 class="fs-subtitle">Provide the necessary information as promted below.</h3>
        <input type="text" name="username" placeholder="Name in full" />
        <input type="text" name="email" placeholder="Email" />
        <input type="text" name="phone" placeholder="Phone number" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Personal Information</h2>
        <h3 class="fs-subtitle">More about you.</h3>
        <input type="text" name="gender" placeholder="Gender" />
        <input type="text" name="ethnicity" placeholder="Ethnicity" />
        <input type="text" name="institution" placeholder="Institution Name In full" />
        <input type="text" name="course" placeholder="course" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Upload documents</h2>
        <h3 class="fs-subtitle">Provide your the necessary documents by uploading them.</h3>
        <div>
            <label for="apl">Upload Application Letter</label>
            <input type="file" name="apl">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplID">Upload ID</label>
            <input type="file" name="uplID">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplLFI">Upload Letter from Institute</label>
            <input type="file" name="uplLFI">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplI">Upload Insurance</label>
            <input type="file" name="uplI">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplGC">Upload Good Conduct</label>
            <input type="file" name="uplGC">

        </div>
        <br>
        <hr>
        <br>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="../static/js/app/script.js"></script>

</body>

</html>