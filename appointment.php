<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Afspraak Maken</title>
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
                <a href="appointment.php" class="active">Afspraak Maken</a>
                <a href="manage.php">Afspraak Beheren</a>
            </div>
        </div>
        <a href="contact.php">Contact</a>
        <a href="admin.php">Admin</a>
        <a href="javascript:void(0);" class="icon" onclick="jsNav()">&#9776;</a>
    </nav>

<?php
$gender = '';
$type_of_work = array();
$about_work= '';
$upload_photos= '';
$info_photos= '';
$date= '';

    if (isset($_POST['submit'])) {
        $ok = true;

        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $ok = false;
        } else {
        $gender = $_POST['gender'];
        }

        if (!isset($_POST['type_of_work']) || $_POST['type_of_work'] === '') {
        $ok = false;
        } else {
        $type_of_work = $_POST['type_of_work'];
        }

        if (!isset($_POST['about_work']) || $_POST['about_work'] === '') {
        $ok = false;
        } else {
        $about_work = $_POST['about_work'];
        }

        if (!isset($_POST['upload_photos']) || $_POST['upload_photos'] === '') {
            $ok = false;
        } else {
            $upload_photos = $_POST['upload_photos'];
        }

        if (!isset($_POST['info_photos']) || $_POST['info_photos'] === '') {
        $ok = false;
        } else {
        $info_photos = $_POST['info_photos'];
        }

        if (!isset($_POST['datum']) || $_POST['datum'] === '') {
            $ok = false;
        } else {
            $date = $_POST['datum'];
        }

        if ($ok) {
            printf('<div>geslacht: %s</div>
            <div>interesse: %s</div>
            <div>werktype: %s</div>
            <div>upload_fotos: %s</div>
            <div>info_fotos: %s</div>
            <div>datum: %s</div>',
                htmlspecialchars($gender),
                htmlspecialchars($type_of_work),
                htmlspecialchars($about_work),
                htmlspecialchars($upload_photos),
                htmlspecialchars($info_photos),
                htmlspecialchars($date));
        }
    }
?>

<div class="appointment_text_1">

    <form name="appointmentForm" onsubmit="return validateFormA()" method="post" action="">
        <fieldset class="fieldset_2">
            <legend class="legend_2">Afspraak Maken</legend>

                <section class="border_for_3">
                <p class="gender_01"><label class="genders" for="gender">Geslacht:</label>
                    <input id="gender" class="gender_1" type="radio" name="gender" value="m"<?php
                    if ($gender === 'm') {
                        echo ' checked';
                    }
                    ?>>Man
                    <input id="gender" class="gender_2" type="radio" name="gender" value="v"<?php
                    if ($gender === 'v') {
                        echo ' checked';
                    }
                    ?>>Vrouw
                </p>

                <p class="type_of_work_01"><label class="type_of_work_1" for="type_of_work">Ik ben geïnteresseerd in:</label>
                    <select id="type_of_work" class="type_of_work_1"  name="type_of_work">
                        <option id="type_of_work" class="select_1" value="">Selecteer</option>
                        <option class="nieuwbouw_1" value="Nieuwbouw"<?php
                        if ($type_of_work === 'Nieuwbouw') {
                            echo ' selected';
                        }
                        ?>>Nieuwbouw</option>
                        <option class="renovatie_1" value="Renovatie"<?php
                        if ($type_of_work === 'Renovatie') {
                            echo ' selected';
                        }
                        ?>>Renovatie</option>
                        <option class="restauratie_1" value="Restauratie"<?php
                        if ($type_of_work === 'Restauratie') {
                            echo ' selected';
                        }
                        ?>>Restauratie</option>
                        <option class="interieurbouw_1" value="Interieurbouw"<?php
                        if ($type_of_work === 'Interieurbouw') {
                            echo ' selected';
                        }
                        ?>>Interieurbouw</option>
                    </select>
                </p>

                <p class="about_work_01"><label class="about_work_1" for="about_work">Waar gaat het over:</label>
                    <textarea rows="3" cols="30" id="about_work" class="about_work_1" name="about_work"
                              placeholder="Kast, deur, raam, dakkapel etc"><?php
                        echo htmlspecialchars($about_work);
                        ?></textarea>
                </p>
                </section>

                <section class="border_for_2">
                <p class="photos_01"><label class="photos_1" for="photos">Foto's:</label>
                    <input type="file" name="photos" id="photos" accept="image/*" value="<?php
                        echo htmlspecialchars($upload_photos);
                        ?>">
                </p>

                <p class="info_photos_01"><label class="info_photos_1" for="info_photos">Verdere uitleg foto's:</label>
                    <textarea rows="3" cols="30" id="info_photos" class="photos_1" name="info_photos"
                              placeholder="Hoe ziet het eruit? (Upload Foto's) Hoe wil je dat het eruit gaat zien?"><?php
                        echo htmlspecialchars($info_photos);
                        ?></textarea>
                </p>
                </section>

                <p class="datum"><label for="datum" class="date_1">Datum:</label>
                    <input type="date" name="datum" id="datum" placeholder="dd-mm-jjjj" value="<?php
                    echo htmlspecialchars($date);
                    ?>">
                </p>

                <p class="submit_02"><input class="submit_2" type="submit" name="submit" value="Afspraak maken">
                </p>

        </fieldset>
    </form>
</div>
</div>

<div class="footer">
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</div>

</body>
</html>