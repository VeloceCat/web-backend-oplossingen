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

        <form action='artikel-zoeken.php' class="query-content">
            <label for="query-content">Zoeken in artikels:</label>
            <input type="text" name="query-content" id="query-content">
            <input type="submit" value="Zoeken">
        </form>

        <form action='artikel-zoeken.php' class="query-date">
            <label for="query-date">Zoeken op datum:</label>
            <select name="query-date" id="query-date">

                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>

            </select>
            <input type="submit" value="Zoeken">
        </form>

        <h1>Artikels overzicht</h1>

        <a href="artikel-toevoegen-form.php">Artikel toevoegen</a>

        <?php
        
        $db = new mysqli('localhost', 'vincent', 'vincent', 'opdracht-mod-rewrite-blog');

                if($db->connect_errno > 0)
                {die('Kan geen connectie maken: ' . $db->connect_error . '.');}
                else
                {
                    $result = $db->query("SELECT * FROM artikels");
                    
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "<article><h2>" . $row["Titel"] . " | " . $row["Datum"]. "</h2><p>" . $row["Artikel"]. "</p><p>Keywords: " . $row["Kernwoorden"]."</p></article>";
                        }
                    }
                }
    
        
        ?>
    </section>
</body>

</html>
