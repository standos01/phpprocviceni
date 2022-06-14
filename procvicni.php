<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>lol</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <table>
        <?php

        for ($i = 1; $i <= 100; $i++) {
            echo "<tr>";

            for ($e = 0; $e <= 6; $e++) {
                echo "<td>";
                echo "Ahoj, svete!";
                echo "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>