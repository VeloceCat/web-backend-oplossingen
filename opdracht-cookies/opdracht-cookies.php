<?php 
	if (isset($_GET['logout'])) {
		setcookie('authenticated', "", time() - 3600);
		header('location: opdracht-cookies.php');
	}

	$myfile = file_get_contents('gegevens.txt');
	$userData =	explode(",", $myfile);

	$message = false;
	$isAuthenticated = false;

	if (!isset($_COOKIE['authenticated'])) {
		if (isset($_POST['submit'])) {
			if ($_POST['username'] == $userData[0] && $_POST['password'] == $userData[1]) {
				setcookie('authenticated', true, time() + 3600);
				header('location: opdracht-cookies.php');
			}
			else {
				$message = "Login failed. :(";
			}
		}
	}
	else {
		$message = "Logged in! :)";
		$isAuthenticated = true;
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht cookies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
    
    <section class="body">
        <h1>Opdracht cookies: deel 1</h1>
                        
        <h1>Login</h1>

        <?php if ($message): ?>
			<?=	$message ?>
		<?php endif ?>

		<?php if ( !$isAuthenticated ): ?>

        <form method="POST" action="opdracht-cookies.php">
            <ul>
                <li>
                    <label for="username">username</label>
                    <input type="text" id="username" name="username">
                </li>
                <li>
                    <label for="password">passwoord</label>
                    <input type="password" id="passwoord" name="password">
                </li>
            </ul>
            <input type="submit" name="submit" value="inloggen">
        </form>
        <?php else: ?>
			<a href="opdracht-cookies.php?logout=true">Log out</a>
		<?php endif ?>
    </section>
    </body>
</html>
