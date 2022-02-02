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

        
        $sql = "SELECT Kunde_ID, Vorname, Nachname, Strasse, PLZ, Ort, Geburtsdatum FROM kunde";
        $result = $conn->query($sql);
        $conn->close(); 
        ?>
        <table>
            <tr>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Strasse</th>
                <th>PLZ</th>
                <th>Geburtsdatum</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Vorname'];?></td>
                <td><?php echo $rows['Nachname'];?></td>
                <td><?php echo $rows['Strasse'];?></td>
                <td><?php echo $rows['PLZ'];?></td>
                <td><?php echo $rows['Geburtsdatum'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </body>
</html>