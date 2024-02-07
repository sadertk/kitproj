<!doctype html>
<html>
<head>
<title>kitproj comics - archive</title>
<link rel="stylesheet" href="w3.css">
</head>
<body>
    <div class="w3-center">
        <h1>kitproj</h1>
        <h2>archive</h2>
        <h6><a href="index.php">home</a> | archive | <a href="about.php">about</a> | <a href="license.php">license</a></h6>
        <hr>
        <!--<h5><a href="viewold.php?comic=welcome">welcome</a></h5>-->
        <?php
        $str = file_get_contents('./comics.json');
        $json = json_decode($str, true);
        // echo $json['comic1']; 
        
        $maxI = $json['comics'];

        for ($i = 1; $i <= $maxI; $i++) {

            echo '<h5><a href="view.php?comic='.$json['comic'.$i].'">'.$json['comic'.$i].'</a></h5>';

        }

        ?>
    </div>
</body>
</html>