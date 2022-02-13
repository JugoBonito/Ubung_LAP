<html>
    <head>
        <meta charset="UTF-8">
        <title>Tankstellenverwaltung</title>
    </head>
    <body>
        
        <h1>Suche nach Kundennummer</h1>
        <?php
        $search = "";
        ?>
        
        <form method="POST">
            <label for="vname">Kundennummer:
            <input type="search" name="suche">
            <button type="submit">Suchen</button>
            <button>Reset</button>
            
            <?php
           if ($_SERVER["REQUEST_METHOD"] == "POST"){
           
               if (empty($_POST["suche"])) {                        
              }
  
            else {
              $search = ($_POST["suche"]);
            echo $search;
            
            }
           
           
            
           }

            ?>
            <a href="ergebnis.php?varname=<?php echo $search ?>">Ergebnis</a>
            
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>