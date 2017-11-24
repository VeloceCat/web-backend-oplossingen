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
    $sql = "SELECT b.biernr, b.naam, b.brouwernr, b.soortnr, b.alcohol, br.brnaam, br.adres, br.postcode, br.gemeente, br.omzet FROM bieren b JOIN brouwers br ON (b.brouwernr = br.brouwernr) WHERE b.naam LIKE 'Du%' AND br.brnaam LIKE '%a%' ";

    $result = $conn->query($sql);
    echo "<table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>biernr (PK)</th>
                    <th>naam</th>
                    <th>brouwernr</th>
                    <th>soortnr</th>
                    <th>alcohol</th>
                    <th>brnaam</th>
                    <th>adres</th>
                    <th>postcode</th>
                    <th>gemeente</th>
                    <th>omzet</th>
                </tr>
            </thead>
            <tbody>";
    if ($result->num_rows > 0) 
    {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $class = "";
        $getal += 1;
        if ($getal % 2) {
            $class = "even";
        }
        echo "
            <tr class='" . $class . "'>
                <td>" . ($getal) . "</td>
                <td>" . $row["biernr"]. "</td>
                <td>" . $row["naam"]."</td>
                <td>" . $row["brouwernr"]."</td>
                <td>" . $row["soortnr"]. "</td>
                <td>" . $row["alcohol"]. "</td>
                <td>" . $row["brnaam"]. "</td>
                <td>" . $row["adres"]. "</td>
                <td>" . $row["postcode"]. "</td>
                <td>" . $row["gemeente"]. "</td>
                <td>" . $row["omzet"]. "</td>
            </tr>";
    }
    echo "
        </tbody>
        
        <tfooter>
        </tfooter>
    </table>";
    }
    $conn->close();
?>