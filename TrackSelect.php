<!DOCTYPE html>

<?php
?>

<html>
    <head>
        <title>Rhythm Trainer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="TrackSelectStyles.css">
        <script src="functions.js"></script>
    </head>
    <body onload="populateList()">
        <div class="trackList" id ="trackList">
        </div>
    </body>  <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="Logout.php?logout">Sign Out</a>
        </div>
    </div>
     
</html>
