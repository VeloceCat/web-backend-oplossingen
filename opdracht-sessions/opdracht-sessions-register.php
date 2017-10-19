<?php
    session_start();

    	if ( isset($_GET['session'])) {
            if ($_GET['session']  == 'destroy') {
                session_destroy( );
                header('location: opdracht-sessions-register.php');
            }
        }

        $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';

        $nickname = (isset($_SESSION["nickname"])) ? $_SESSION["nickname"] : '';
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

    <h2>Registratiepagina</h2>

    <form method="POST" action="opdracht-sessions-adres.php">
        <ul>
            <li>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" value="<?= $email ?>" <?=(isset( $_GET['focus']) && $_GET['focus']=="email") ? "class = 'focus'" : '' ?>>
            </li>
            <li>
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" <?=(isset($_GET['focus']) && $_GET['focus']=="nickname") ? "class = 'focus'" : '' ?>>
            </li>
        </ul>
        <input type="submit" value="Volgende">
    </form>

    <a href="opdracht-sessions-register.php?session=destroy">Vernietig sessie</a>


</body>

</html>
