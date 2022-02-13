<html>
    <head>
        <meta charset="UTF-8">
        <title>Tankstellenverwaltung</title>
    </head>
    <body>
        
        <h1>Suchergebnis</h1>
        
       <?php 
     
        require_once('konfig.php'); //statt  siehe unten 
     //  $servername = "localhost";
     //   $username = "root";
     //   $password = "";
      //  $dbname = "tankstelle"; usw. 
        
       
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection 
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        
        $search = $_GET['varname'];

$sql = "SELECT kunde_id, vorname, nachname, strasse, plz, ort, geburtsdatum FROM kunde WHERE kunde_id=$search";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Kundennummer: " . $row["kunde_id"]. "<br>";
        echo "Vorname: " . $row["vorname"]. "<br>";
        echo "Nachname:  " . $row["nachname"]. "<br>";
        echo "Strasse:  " . $row["strasse"]. "<br>";
        echo "PLZ:  " . $row["plz"]. "<br>";
        echo "Ort:  " . $row["ort"]. "<br>";
        echo "Geburtstdatum:  " . $row["geburtsdatum"]. "<br>";
    }
} else {
    echo "Kunde nicht vorhanden oder falsche Eingabe!";
}

$sql = "SELECT SUM(verbrauch.menge) AS gesamtmenge FROM verbrauch WHERE kunde_id=$search GROUP BY kunde_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Gesamtmenge: " . $row["gesamtmenge"]. "<br>";
    }
}
$sql = "SELECT SUM(verbrauch.preis) AS gesamtpreis FROM verbrauch WHERE kunde_id=$search GROUP BY kunde_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Gesamtpreis: " . $row["gesamtpreis"]. "<br>";
    }
}
 $conn->close();
        
        ?>
        
        <form>
            <button>Neue Abfrage</button>
            <a href="suchen.php">Suchen</a> 
        </form>
        
        <?php
        
        ?>
    </body>
</html>