<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <script type="text/javascript" src="reservation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="reservation.css"
</head>
<body>
<div class="pageContentWrapper">
<img src="img/logo-ermax.png" alt="Logo Ermax Bouw" class="main-image">

    <nav class="topnav" id="myTopnav">
        <a href="index.php">Over Ermax</a>
        <a href="projects.php">Projecten</a>
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
        <a href="contact.php" class="active">Contact</a>
        <a href="admin.php">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

<div class="contact_me">

    <form name="contactForm" onsubmit="return validateFormC()" method="post" action="">
        <fieldset class="fieldset_contact">
            <legend class="legend_contact">Contact</legend>

            <p class="contact_name_01"><label class="contact_name_1" for="name_contact">Naam:</label>
                <input id="name_contact" class="contact_name_1" type="text" name="name_contact" value="">
            </p>

            <p class="contact_email_01"><label class="contact_email_1" for="contact_email">E-mail:</label>
                <input id="contact_email" class="contact_email_1" type="email" name="email_contact" value="">
            </p>

            <p class="contact_subject_01"><label class="contact_subject_1" for="contact_subject">Onderwerp:</label>
                <input id="contact_subject" class="contact_subject_1" type="text" name="subject_contact" value="">
            </p>

            <p class="contact_about_01"><label class="contact_about_1" for="contact_about">Bericht:</label>
                <textarea rows="5" cols="50" id="contact_about" class="contact_about_1" name="contact_about"></textarea>
            </p>

            <p class="contact_submit_01"><input class="contact_submit_1" type="submit" name="submit" value="Verzenden">
            </p>

        </fieldset>
    </form>
</div>

    <ul class="flex-container1">
        <li>
            <img src="img/Ermax_Locatie.png" alt="Locatie ermax" class="flex-item4">
        </li>
    </ul>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>