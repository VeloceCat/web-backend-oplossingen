<?php
    spl_autoload_register(function ($class_name) {
        include 'classes/' . $class_name . '.php';
    });
    
    // Animals
    $kikker	= new Animal('Kermit', 'male', 100);
	$kat = new Animal('Dikkie', 'male', 100);
	
	$kikker->changeHealth(-10);

    $dolfijn = new Animal('Flipper', 'female', 80);
    
    // Lions
	$simba 	= 	new Lion('Simba', 'male', 100, 'Congo lion');
	$scar 	= 	new Lion('Scar', 'female', 100, 'Kenia lion');

	// Zebras
	$zeke = new Zebra('Zeke', 'male', 120, 'Quagga');
	$zana = new Zebra('Zana', 'female', 100, 'Selous');

?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Oplossing</title>
        </head>
        <body>

            <h1>Animals</h1>

            <p>
                <?php echo "{$kikker->getName()} is van het geslacht {$kikker->getGender()} en heeft momenteel {$kikker->getHealth()} levenspunten (special move: {$kikker->doSpecialMove()})" ?>
            </p>

            <p>
                <?php echo "{$kat->getName()} is van het geslacht {$kat->getGender()} en heeft momenteel {$kat->getHealth()} levenspunten (special move: {$kat->doSpecialMove()})" ?>
            </p>

            <p>
                <?php echo "{$dolfijn->getName()} is van het geslacht {$dolfijn->getGender()} en heeft momenteel {$dolfijn->getHealth()} levenspunten (special move: {$dolfijn->doSpecialMove()})" ?>
            </p>

            <h2>Leeuwen</h2>

            <p>
                <?php echo "De speciale move van Simba (soort: {$simba->getSpecies()}): {$simba->doSpecialMove()}" ?>
            </p>
            <p>
                <?php echo "De speciale move van Scar (soort: {$scar->getSpecies()}): {$scar->doSpecialMove()}" ?>
            </p>


            <h2>Zebras</h2>

            <p>
                <?php echo "De speciale move van Zeke (soort: {$zeke->getSpecies()}): {$zeke->doSpecialMove()}" ?>
            </p>
            <p>
                <?php echo "De speciale move van Zana (soort: {$zana->getSpecies()}): {$zana->doSpecialMove()}" ?>
            </p>

        </body>
    </html>