<!doctype html>
<html>
<head>
<?php include('config.php'); ?>
<title>kitproj comics - <?= $comicname; ?></title>
<link rel="stylesheet" href="w3.css">
</head>
<body>
    <div class="w3-center">
        <h1>kitproj</h1>
        <h2>comics i made</h2>
        <h6>home | <a href="archive.php">archive</a> | <a href="about.php">about</a> | <a href="license.php">license</a></h6>
        <hr>
        <img src=<?php echo '"./comics/'.$comicname.'"';?>>
        <h3>"<?php echo $comicname ?>"</h3>
        <h4>comic for <?php echo date("F jS Y");?></h4>
        <br>
    </div>
</body>
</html>