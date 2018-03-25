<?php include 'serverInfo.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>System Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='style.css' rel='stylesheet'>
</head>
<body>
    <div class='container' >
        <h2>Your PHP Setup</h2>
            <ul class='list-group'>
            <?php                
                if($server){
                    echo "<h4 class='list-group-item list-group-item-primary'>Server Info</h4>";
                    foreach($server as $serverDescription => $serverOutput){
                        echo "<li class='list-group-item'>$serverDescription: <small>$serverOutput</small></li>";
                    }
                    echo '<hr>';
                }
            
                if($client){
                    echo "<h4 class='list-group-item list-group-item-primary'>Client Info</h4>";
                    foreach($client as $clientDescription  => $clientOutput){
                        echo "<li class='list-group-item'>$clientDescription: $clientOutput</li>";
                    }
                }
            ?>
            </ul>
    </div>    
</body>
</html>