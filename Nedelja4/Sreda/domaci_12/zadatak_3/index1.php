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
        $prvi_broj = mt_rand(1,10);
        $drugi_broj = mt_rand(1,10);
        $treci_broj = mt_rand(1,10);

        $koren_prvog = sqrt($prvi_broj);
        echo $koren_prvog;
        echo "<br />";

        $koren_drugog = sqrt($drugi_broj);
        echo $koren_drugog;
        echo "<br />";

        $koren_treceg = sqrt($treci_broj);
        echo $koren_treceg;
        echo "<br />";

        echo "<table>
        <tr>
        <td style='border: 1px solid black'> $prvi_broj </td>
        <td style='border: 1px solid black'> $koren_prvog </td>
        </tr>

        <tr>
        <td style='border: 1px solid black'> $drugi_broj </td>
        <td style='border: 1px solid black'> $koren_drugog </td>
        </tr>

        <tr>
        <td style='border: 1px solid black'> $treci_broj </td>
        <td style='border: 1px solid black'> $koren_treceg </td>
        </tr>
        </table>"

        
        
        //  "<table style='border: 1px solid black'>
        //         <tr>
        //         <td> $prvi_broj  </td>
        //         <td>
        //             sqrt $prvi_broj
        //             </td>
        //         </tr> 

        //     </table>";

            // echo "<tr>";
            // echo "<td>" "$prvi_broj", "</td>";
            // echo "<td> sqrt($prvi_broj); "</td>";
            // echo "</tr>";


    ?>
</body>
</html>