<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> STATS - Application page</title>
    <link rel="icon" type="img/" href="../static/img/app/5smMvRlz_400x400.jpg">
    <link rel="stylesheet" href="../static/css/app/reset.min.css">
    <link rel="stylesheet" href="../static/css/app/style1.css">



<style type="text/css">
    /*changed to nvblue bg*/
    .topnav {
        background-color: #3b4148;
        font-family: 'Poppins', san serif;
        overflow: hidden;
        position: absolute;
        left: 548px;
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

    <div class="topnav">
        <a class="active" href="../">Home</a>
        <a href="../admin/login.php">Login</a>
        <a href="../admin/">Administrator</a>
    </div>
<br>

<br>
</head>

<body>

<form id="msform" action="sent.php" method="post" name="mainForm" enctype="multipart/form-data">

    <ul id="progressbar">
        <li class="active">Contact information</li>
        <li>Personal informatiion</li>
        <li>Upload Documents</li>
    </ul>

    <fieldset>
        <h2 class="fs-title">Contact information</h2>
        <h3 class="fs-subtitle">Provide the necessary contact information as promted below.</h3>
        <input type="text" name="usename" placeholder="Name in full" />
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
        <h3 class="fs-subtitle">Click "Choose file/browser" find and select the  document as prompted by the lables.</h3>
        <div>
            <label for="apl">Upload Application Letter</label>
            <br>
            <input type="file" name="apl">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplID">Upload ID</label>
            <br>
            <input type="file" name="uplID">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplLFI">Upload Letter from Institute</label>
            <br>
            <input type="file" name="uplLFI">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplI">Upload Insurance</label>
            <br>
            <input type="file" name="uplI">

        </div>
        <br>
        <hr>
        <br>
        <div>
            <label for="uplGC">Upload Good Conduct</label>
            <br>
            <input type="file" name="uplGC">

        </div>
        <br>
        <hr>
        <br>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>


<script src='../static/js/app//jquery.min.js'></script>
<script src='../static/js/app/jquery.easing.min.js'></script>
<script src="../static/js/app/script.js"></script>

</body>

<!@n8 olando>
</html>

