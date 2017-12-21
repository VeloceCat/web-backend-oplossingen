<?php

session_start();
    if ($_SESSION['form']['error'] == 'true')
    {
        $datum = $_SESSION['form']['datum'];
        $titel = $_SESSION['form']['titel'];
        $artikel = $_SESSION['form']['artikel'];
        $kernwoorden = $_SESSION['form']['kernwoorden'];
        $msg = $_SESSION['form']['message'];
    }

?>


    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht mod_rewrite: blog</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <style>
                .query-content,
                .query-date {
                    margin: 18px 0;
                }
                
                .query-content input,
                .query-content label,
                .query-date input,
                .query-date label,
                {
                    display: inline;
                }

            </style>

            <h1>Artikel toevoegen</h1>

            <a href="artikel-overzicht.php">Terug naar overzicht</a>

            <form action="artikel-toevoegen.php" method="post">
                <ul>
                    <li>
                        <label for="titel">Titel</label>
                        <input type="text" id="titel" name="titel" value="<?php echo (isset($titel)) ? $titel : '' ?>">
                    </li>
                    <li>
                        <label for="artikel">Artikel</label>
                        <textarea id="artikel" name="artikel">
                            <?php echo (isset($artikel)) ? $artikel : '' ?>
                        </textarea>
                    </li>
                    <li>
                        <label for="kernwoorden">Kernwoorden</label>
                        <input type="text" id="kernwoorden" name="kernwoorden" value="<?php echo (isset($kernwoorden)) ? $kernwoorden : '' ?>">
                    </li>
                    <li>
                        <label for="datum">Datum</label>
                        <input type="date" id="datum" name="datum" value="<?php echo (isset($datum)) ? $datum : '' ?>">
                    </li>
                </ul>
                <input type="submit" name="submit">
                <p>
                    <?php echo (isset($msg)) ? $msg : '' ?>
                </p>
            </form>
        </section>
    </body>

    </html>
