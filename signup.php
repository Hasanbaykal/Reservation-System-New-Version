<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aanmelden</title>
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
                <a href="signup.php" class="active">Aanmelden</a>
                <a href="appointment.php">Afspraak Maken</a>
                <a href="manage.php">Afspraak Beheren</a>
            </div>
        </div>
        <a href="contact.php">Contact</a>
        <a href="admin.php">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

<?php
    $email = '';
    $gebruikersnaam = '';
    $wachtwoord = '';

        if (isset($_POST['submit'])) {
            $ok = true;

            if (!isset($_POST['email']) || $_POST['email'] === '') {
                $ok = false;
            } else {
                $email = $_POST['email'];
            }

            if (!isset($_POST['gebruikersnaam']) || $_POST['gebruikersnaam'] === '') {
                $ok = false;
            } else {
                $gebruikersnaam = $_POST['gebruikersnaam'];
            }

            if (!isset($_POST['wachtwoord']) || $_POST['wachtwoord'] === '') {
                $ok = false;
            } else {
                $wachtwoord = $_POST['wachtwoord'];
            }

            if ($ok) {
                printf(
                    '<div>email: %s</div>
                <div>gebruikersnaam: %s</div>
                <div>wachtwoord: %s</div>',
                    htmlspecialchars($email),
                    htmlspecialchars($gebruikersnaam),
                    htmlspecialchars($wachtwoord));
            }
        }
?>

    <div class="signup_text_1">

        <form name="signupForm" onsubmit="return validateFormS()" method="post" action="">
            <fieldset class="fieldset_1">
                <legend class="legend_1">Aanmelden</legend>

                    <p class="email_01">
                        <label class="email_1" for="email">E-mail:</label>
                        <input id="email" class="email_1" type="email" name="email" value="<?php
                        echo htmlspecialchars($email);
                        ?>">
                    </p>

                    <p class="text_type_01"><label class="text_type_1" for="gebruikersnaam">Gebruikersnaam:</label>
                        <input id="gebruikersnaam" class="text_type_1" type="text" name="gebruikersnaam" value="<?php
                        echo htmlspecialchars($gebruikersnaam);
                    ?>">
                    </p>

                    <p class="password_type_01"><label class="password_type_1" for="wachtwoord">Wachtwoord:</label>
                        <input id="wachtwoord" class="password_type_1" type="password" name="wachtwoord" value="<?php
                        echo htmlspecialchars($wachtwoord);
                    ?>">
                    </p>

                    <p class="submit_01"><input class="submit_1" type="submit" name="submit" value="Aanmelden">
                    </p>

            </fieldset>
        </form>

        <section class="p_2">
            <p> Als je bij Ermax online een afspraak wilt inplannen is het
            belangrijk om eerst een account aan te maken.</p>

            <p> Hierna ben je automatisch ingelogd en kan je een afspraak inplannen door middel van het invullen
            van een aantal relevante informatie. Hierdoor krijgen wij een goed beeld van wat je wilt
            en kunnen we beter feedback geven.</p>

            <p> Naderhand kan je op de pagina waar je je reservering kan beheren zien wat wij jou te bieden hebben.
            Natuurlijk krijg je hier eerst een bevestiging van via mail. Eveneens laten we je de beschikbare
            tijden zien van de datum die jij hebt gekozen. Het enige wat je hierna nog moet doen is een
            geschikte tijd selecteren en de afspraak bevestigen of als je er niet mee eens bent de afspraak
            annuleren. </p>
        </section>

    </div>
</div>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>