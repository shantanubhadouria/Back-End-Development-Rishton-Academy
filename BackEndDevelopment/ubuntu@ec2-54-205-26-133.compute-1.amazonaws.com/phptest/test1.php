<html>
    <head>
        <title>PHP Test 1</title>
    </head>
    <body>
        <h1>PHP Test 1</h1>
        <?php
            echo("1 == 1 -> ");
            var_dump(1 == 1);
            echo("<br />");
            echo("1 != 1 ->");
            var_dump(1 != 1);
            echo("<br />");
            echo("1 <= 2 -> ");
            var_dump(1 <= 2);
            echo("<br />");
            echo("1 <= 0 ->");
            var_dump("1 <= 0 ->" . 1 <= 0);
            
        ?>
    </body>
<html>