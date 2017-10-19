<?php
    session_start();

    if (isset($_POST['email']) && isset($_POST['nickname'])) {
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["nickname"] = $_POST['nickname'];
    }

    $straat = (isset($_SESSION["straat"])) ? $_SESSION["straat"] : '';

    $nummer = (isset($_SESSION["nummer"])) ? $_SESSION["nummer"] : '';

    $gemeente = (isset($_SESSION["gemeente"])) ? $_SESSION["gemeente"] : '';

    $postcode = (isset($_SESSION["postcode"])) ? $_SESSION["postcode"] : '';

?>
    
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht sessions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">

    <style>
        .focus {
            outline: 2px solid #07a550;
        }

    </style>

</head>

<body class="web-backend-opdracht">

    <h1>Registratiegegevens</h1>

    <ul>
        <li>
            <?php echo 'email: ' . $_SESSION["email"] ?>
        </li>
        <li>
            <?php echo 'nickname: ' . $_SESSION["nickname"] ?>
        </li>
    </ul>

    <h1>Deel 2: adres</h1>
    <form method="POST" action="opdracht-sessions-overzicht.php">
        <ul>
            <li>
                <label for="straat">straat</label>
                <input type="text" id="straat" name="straat" value="<?= $straat ?>" <?=(isset( $_GET['focus']) && $_GET['focus']=="straat") ? "class = 'focus'" : '' ?>>
            </li>
            <li>
                <label for="nummer">nummer</label>
                <input type="number" id="nummer" name="nummer" value="<?= $nummer ?>" <?=(isset($_GET[ 'focus']) && $_GET['focus']=="nummer") ? "class = 'focus'" : '' ?>>
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" <?=(isset($_GET[ 'focus']) && $_GET['focus']=="gemeente") ? "class = 'focus'" : '' ?>>
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" <?=(isset($_GET[ 'focus']) && $_GET['focus']=="postcode") ? "class = 'focus'" : '' ?>>
            </li>
        </ul>
        <input type="submit" value="Volgende">
    </form>


    <a href="opdracht-sessions-register.php?session=destroy">Vernietig sessie</a>


</body>

</html>
