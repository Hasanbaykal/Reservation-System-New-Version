<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Afspraak Beheren</title>
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
                <a href="manage.php" class="active">Afspraak Beheren</a>
            </div>
        </div>
        <a href="contact.php">Contact</a>
        <a href="admin.php">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

<div class="manage_text_1">
    <form name="manageForm" onsubmit="return validateFormM()" method="post" action="">
        <fieldset class="fieldset_3">
            <legend class="legend_3">Afspraak Beheren</legend>

            <p class="offer_01"><label class="offer_1" for="offer">Wat hebben wij jou te bieden:</label>
                <textarea rows="5" cols="50" id="offer" class="offer_1" name="offer"
                          placeholder="Hier komt te staan wat we jou te bieden hebben qua mogelijkheden met betrekking tot de ingeplande afspraak"></textarea>
            </p>

            <p class="available_time_01"><label class="available_time_1" for="available_time">Beschikbare dagen en tijden selecteren:</label>
                <select id="available_time" class="available_time_1"  name="available_time">
                    <option id="available_time" class="select_2" value="">Selecteer</option>
                    <option class="day_time_1" value="day_time_01"
                    >Dinsdag 22-01 - 09:30</option>
                    <option class="day_time_2" value="day_time_02"
                    >Dinsdag 22-01 - 10:30</option>
                    <option class="day_time_3" value="day_time_03"
                    >Donderdag 24-01 - 13:30</option>
                    <option class="day_time_4" value="day_time_04"
                    >Vrijdag 25-01 - 15:30</option>
                </select>
            </p>

            <div class="accept_decline">
                    <input class="accept_1" type="submit" name="submit" value="Bevestigen">
                    <input class="decline_1" type="submit" name="submit" value="Annuleren">
            </div>

        </fieldset>
    </form>
</div>
</div>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>