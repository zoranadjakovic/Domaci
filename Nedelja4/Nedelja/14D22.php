<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $inicijali = $_GET['imeiprezime'];
        $ime = substr( $inicijali, 0, 1 );
        echo "$ime.";
        $prezime_index = strpos ( $inicijali," ");
        $prezime = substr ( $inicijali, $prezime_index + 1, 1);
        echo "$prezime.";
        ?>
</body>
</html>