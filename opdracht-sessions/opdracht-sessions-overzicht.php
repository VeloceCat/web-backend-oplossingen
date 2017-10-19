<?php
    session_start();

    $_SESSION["straat"] = $_POST['straat'];
    $_SESSION["nummer"] = $_POST['nummer'];
    $_SESSION["gemeente"] = $_POST['gemeente'];
    $_SESSION["postcode"] = $_POST['postcode'];

    $email = $_SESSION["email"];
    $nickname = $_SESSION["nickname"];
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht sessions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-opdracht">

    <h1>Overzichtspagina</h1>

    <ul>
        <li>
            <?php echo 'email: ' . $email . " | " ?><a href="opdracht-sessions-register.php?focus=email">wijzig</a>
        </li>
        <li>
            <?php echo 'nickname: ' . $nickname . " | " ?><a href="opdracht-sessions-register.php?focus=nickname">wijzig</a>
        </li>
        <li>
            <?php echo 'straat: ' . $_SESSION["straat"] . " | " ?><a href="opdracht-sessions-adres.php?focus=straat">wijzig</a></li>
        <li>
            <?php echo 'nummer: ' . $_SESSION["nummer"] . " | " ?><a href="opdracht-sessions-adres.php?focus=nummer">wijzig</a></li>
        <li>
            <?php echo 'gemeente: ' . $_SESSION["gemeente"] . " | " ?><a href="opdracht-sessions-adres.php?focus=gemeente">wijzig</a></li>
        <li>
            <?php echo 'postcode: ' . $_SESSION["postcode"] . " | " ?><a href="opdracht-sessions-adres.php?focus=postcode">wijzig</a></li>
    </ul>


    <a href="opdracht-sessions-register.php?session=destroy">Vernietig sessie</a>


</body>

</html>
