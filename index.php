<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Over Ermax</title>
    <script type="text/javascript" src="reservation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="reservation.css"
</head>
<body>
<div class="pageContentWrapper">
    <img src="img/logo-ermax.png" alt="Logo Ermax Bouw" class="main-image">

    <nav class="topnav" id="myTopnav">
        <a href="index.php" class="active">Over Ermax</a>
        <a href="projects.php" class="inactive">Projecten</a>
        <div class="dropdown">
            <button class="dropbtn">Reservering
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="signup.php" class="inactive">Aanmelden</a>
                <a href="appointment.php" class="inactive">Afspraak Maken</a>
                <a href="manage.php" class="inactive">Afspraak Beheren</a>
            </div>
        </div>
        <a href="contact.php" class="inactive">Contact</a>
        <a href="admin.php" class="inactive">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

    <ul class="flex-container">
        <li>
            <img src="img/Nieuwbouw-Ermax.jpg" alt="Nieuwbouw Ermax" class="flex-item1">
            <div class="centered_nieuwbouw">Nieuwbouw</div>
        </li>
        <li>
            <img src="img/Verbouw-Ermax.jpg" alt="Verbouw Ermax" class="flex-item2">
            <div class="centered_verbouw">Verbouw</div>
        </li>
        <li>
            <img src="img/Interieurbouw-Ermax.jpg" alt="Interieurbouw Ermax" class="flex-item3">
            <div class="centered_interieurbouw">Interieurbouw</div>
        </li>
    </ul>

    <div class="text_aboutme">
        <h1 class="h1_aboutme"> Over <span style="color:#80af2b">Ermax</span></h1>

        <p class="p_aboutme"> Ermax bouwt naar uw wens. Of het gaat om nieuwbouw, renovatie, restauratie of interieurbouw. Op elk van deze
            vlakken hebben we de nodige ervaring. </p>
        <p class="p_aboutme2"> Uiteraard garandeert deze combinatie een strakke planning, weinig
            tijdverlies en een duidelijk overzicht in de kosten. </p>
        <p class="p_aboutme3"> In goed overleg realiseren wij wat u vraagt,
            alles vanuit eigen productie met de kwaliteit die daarbij hoort.</p>
    </div>
</div>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>