<!doctype html>
<html>
<head>
<?php include('config.php'); ?>
<title>kitproj comics - htmlspecialchars(<?= $_GET['comic'] ?>)</title>
<link rel="stylesheet" href="w3.css">
</head>
<body>
    <div class="w3-center">
        <h1>kitproj</h1>
        <h2>comics i made</h2>
        <h6><a href="index.php">home</a> | <a href="archive.php">archive</a> | <a href="about.php">about</a> | <a href="license.php">license</a></h6>
        <hr>
        <img src=<?php echo '"./comics/'.htmlspecialchars($_GET['comic']).'"';?>>
        <h3>"<?= htmlspecialchars($_GET['comic']) ?>"</h3>
        <h4>this is an archive</h4>
    </div>
</body>
</html>