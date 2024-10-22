<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php
            function controlloNumeri ($n1, $n2) {
                if ($n1 == "" || $n2 == "") {
                    echo "<p style='color: red;'>Errore: almeno uno dei due numeri è vuoto</p>";
                    echo "<a href='Es.25.html'>Torna indietro</a>";
                } else {
                    stampaLista ($n1, $n2);
                    stampaTabella ($n1, $n2);
                }
            }

            function stampaLista ($n1, $n2) {
                echo "<ul> <li>$n1</li><li>$n2</li> </ul>";
            }

            function stampaTabella ($n1, $n2) {
                $n1Intero = intval ($n1);
                $n2Intero = intval ($n2);
                $addizione = $n1Intero + $n2Intero;
                $sottrazione = $n1Intero - $n2Intero;
                $moltiplicazione = $n1Intero * $n2Intero;
                $divisione = $n1Intero / $n2Intero;
                echo "<table style='border: solid, black, 2px; border-collapse: collapse;'>";
                echo "<tr> <th style='border: solid, black, 2px'>Operazione</th> <th style='border: solid, black, 2px'>Risultato</th> </tr>";
                echo "<tr> <td style='border: solid, black, 2px'>Addizione</td> <td style='border: solid, black, 2px'>$addizione</td> </tr>";
                echo "<tr> <td style='border: solid, black, 2px'>Sottrazione</td> <td style='border: solid, black, 2px'>$sottrazione</td> </tr>";
                echo "<tr> <td style='border: solid, black, 2px'>Moltiplicazione</td> <td style='border: solid, black, 2px'>$moltiplicazione</td> </tr>";
                echo "<tr> <td style='border: solid, black, 2px'>Divisione</td> <td style='border: solid, black, 2px'>$divisione</td> </tr>";
                echo "</table>";
            }

            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            controlloNumeri ($n1, $n2);
        ?>
        
    </body>
</html>