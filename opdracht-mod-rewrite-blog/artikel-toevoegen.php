<?php

if (isset($_POST['submit']))
	{
    
    $datum = $_POST['datum'];
    $titel = $_POST['titel'];
    $artikel = $_POST['artikel'];
    $kernwoorden = $_POST['kernwoorden'];
    
        if ($datum != '' && $titel != '' && $artikel != '' && $kernwoorden != '') 
        {
           session_start();
            $_SESSION['form']['error'] = 'false';
            $_SESSION['form']['datum'] = $datum;
            $_SESSION['form']['titel'] = $titel;
            $_SESSION['form']['artikel'] = $artikel;
            $_SESSION['form']['kernwoorden'] = $kernwoorden;
            $_SESSION['form']['message'] = '';
            

                $db = new mysqli('localhost', 'vincent', 'vincent', 'opdracht-mod-rewrite-blog');

                if($db->connect_errno > 0)
                {die('Kan geen connectie maken: ' . $db->connect_error . '.');}
                else
                {
                    $result = $db->query('INSERT INTO artikels (Titel, Artikel, Kernwoorden, Datum)
                                        VALUES ("'. $titel .'","'.$artikel.'","'.$kernwoorden.'","'.$datum.'")');

                    if ( !$result )
                    {   
                        $_SESSION['form']['message'] = 'Er is een fout opgetreden in de database, gelieve alles in te vullen en je gegevens na te kijken. ' . $db->error;
                        header('location: artikel-toevoegen-form.php');
                    }
                    else 
                    {   
                        header('location: artikel-overzicht.php');
                    }
                } 
        }
        else 
        {   
            session_start();
            $_SESSION['form']['error'] = 'true';
            $_SESSION['form']['datum'] = $datum;
            $_SESSION['form']['titel'] = $titel;
            $_SESSION['form']['artikel'] = $artikel;
            $_SESSION['form']['kernwoorden'] = $kernwoorden;
            $_SESSION['form']['message'] = 'Er is een fout opgetreden, gelieve alles in te vullen en je gegevens na te kijken.';
            header('location: artikel-toevoegen-form.php');
        }
    
    
    }
?>
