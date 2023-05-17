<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="../../public/style.css">
    <title>Hirdetés szolgáltatás</title>
</head>
<body>
    <?php 
        include "trash_can/header.php";
        
    ?>
    <h2 class=columns>Aktív hírdetéseink:</h2>

    <?php
            echo '<div class="push">';
            echo '<table>';
            echo '<tr>';            // table header
            echo '<th>ID</th>';        
            echo '<th>Name</th>';
            echo '<th>Title</th>';
            echo '</tr>';
            
            // table rows
            foreach ($data as $row):
                echo '<tr>';
                echo '<td>' . $row['0'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['title'] . '</td>';
                echo '</tr>';
            endforeach;
            echo '</table>';
            echo '</div>';
            
    include "trash_can/footer.php";
    ?>
</body>
</html>