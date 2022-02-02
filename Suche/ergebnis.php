<html>
    <head>
        <meta charset="UTF-8">
        <title>Tankstellenverwaltung</title>
    </head>
    <body>
        
        <h1>Suchergebnis</h1>
        
       <?php 
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="tankstelle";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

        $search = $_GET['varname'];

$sql = "SELECT Kunde_ID, Vorname, Nachname, Strasse, PLZ, Ort, Geburtsdatum FROM kunde WHERE Kunde_ID=$search";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Kundennummer: " . $row["Kunde_ID"]. "<br>";
        echo "Vorname: " . $row["Vorname"]. "<br>";
        echo "Nachname:  " . $row["Nachname"]. "<br>";
        echo "Strasse:  " . $row["Strasse"]. "<br>";
        echo "PLZ:  " . $row["PLZ"]. "<br>";
        echo "Ort:  " . $row["Ort"]. "<br>";
        echo "Geburtstdatum:  " . $row["Geburtsdatum"]. "<br>";
    }
} else {
    echo "Kunde nicht vorhanden oder falsche Eingabe!";
}

 $conn->close();
        
        ?>
        
        <form>
            <button>Neue Abfrage</button>
            <a href="suche.php">Suchen</a> 
        </form>
    </body>
</html>