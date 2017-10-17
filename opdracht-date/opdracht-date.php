<?php
    setlocale( 'LC_ALL', 'nl_NL' );
    
    $timestamp = mktime(22, 35, 21, 01, 21, 1904);
    $datum = date('d F Y, g:i:s a', $timestamp);

    $datumNL = strftime('%d %B %Y, %H:%M:%S', $timestamp);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht date</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    </head>
    <body class="web-backend-opdracht">
        <section class="body">
            <h1>Opdracht date: deel 1</h1>

            <p><?php echo $datum ?></p>

            <h1>Opdracht date: deel 2</h1>

            <p><?php echo $datumNL ?></p>
            
        </section>
    </body>
</html>
