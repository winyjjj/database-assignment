<?phpsession_start();

if(issets($_SESSION{'id'})) && isset($_SESSION{'user_name'}) {
    ?>

    <!doctype html>
    <html>
        <head>

        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <hi>Hello, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="logout.php">logout</a>
    <?</body>
        </html>

        <?php?
}
else {
    header("location: index.php");
    exit();
}
    ?>
