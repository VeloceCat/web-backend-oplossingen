<style>
    .even {
        background: #F1F1F1;
    }

</style>
<?php

$servername = 'localhost';
$username = 'vincent';
$password = 'vincent';
$dbname = 'bieren';
$getal = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT brnaam, brouwernr FROM brouwers";

$result = $conn->query($sql);

    echo "<form>
    <select name='brouwernr'>";

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<option value='". $row['brouwernr'] ."'>". $row['brnaam'] ."</option>";  
    }
}
echo "</select>";
echo "<input value='Geef mij alle bieren van deze brouwerij' type='submit'>
    </form>";





$sql = "SELECT naam FROM bieren WHERE brouwernr = ". $_GET['brouwernr'];

$result = $conn->query($sql);

    echo "<table>
    <thead>
        <tr>
            <th>Aantal</th>
            <th>naam</th>
        </tr>
    </thead>
    <tbody>";

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $class ='';
        $getal += 1;
        if ($getal % 2) {
            $class = 'even';
        }
        
        echo "
            <tr class='" . $class . "'>
                <td>" . $getal . "</td>
                <td>" . $row["naam"]. "</td>
            </tr>"; 
    }
}

echo "
        </tbody>
    </table>";

$conn->close();


?>
