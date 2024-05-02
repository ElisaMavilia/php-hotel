<?php 

$template="";

include __DIR__ ."/../models/data.php";
foreach ($hotels as $hotel){
        $template .= "<ul> <li>{$hotel['name']}</li> <li>{$hotel['description']}</li> <li>{$hotel['parking']}</li> <li>{$hotel['vote']}</li> <li>{$hotel['distance_to_center']}</li> </ul>";
    }
    /* var_dump(($hotels)); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
           <?php echo $template ?>
        </div>
    </main>
</body>
</html>