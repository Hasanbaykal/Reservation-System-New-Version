<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Projecten</title>
    <script type="text/javascript" src="reservation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="reservation.css"
</head>
<body>
<div class="pageContentWrapper">

    <img src="img/logo-ermax.png" alt="Logo Ermax Bouw" class="main-image">

    <nav class="topnav" id="myTopnav">
        <a href="index.php">Over Ermax</a>
        <a href="projects.php" class="active">Projecten</a>
        <div class="dropdown">
            <button class="dropbtn">Reservering
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="signup.php">Aanmelden</a>
                <a href="appointment.php">Afspraak Maken</a>
                <a href="manage.php">Afspraak Beheren</a>
            </div>
        </div>
        <a href="contact.php">Contact</a>
        <a href="admin.php">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <img src="" name="slide" class="images_slideshow"/>

    </div>
</div>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>