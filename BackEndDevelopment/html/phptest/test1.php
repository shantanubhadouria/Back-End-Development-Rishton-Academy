<html>
    <head>
        <title>PHP Test 1</title>
    <head>
    <body>
        <h1>PHP Test 1</h1>
        <?php
            function number_machine($start_number) {
                $end_number = (($start_number + 4 ) * 3 -1) * 6 / 4;
                return $end_number;
            } 
            $start_number = 10;
            $end_number =
            number_machine($start_number);
            echo $end_number;
        ?>
    </body>
</html>