<?php include("../../../includes/a_config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../../includes/head-tag-contents.php"); ?>

    <link rel="stylesheet" href="app.css">
    <script src="https://unpkg.com/konva@9/konva.min.js"></script>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <div id="lobby-container"></div>
    <div id="game-container"></div>
    <div id="game-over"></div>
    <script src="game.js"></script>
</body>

</html>