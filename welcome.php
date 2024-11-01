<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<header>
    <meta charset="UTF-8">
    <title>Welcome</title>
</header>

<body>
    <h2>Welcome, <?php echo $_SESSION['usuario']; ?></h2>
    <p><a href="logout.php">Exit</a></p>
</body>
</html>