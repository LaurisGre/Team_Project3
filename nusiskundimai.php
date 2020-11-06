<?php
$h1 = 'NUSISKUNDIMAI';
if (empty($_POST)) {
    $text = 'nusiskundimai-display-none';
    $form = 'nusiskundimai-display-flex';
} else {
    $name = $_POST['vardas'];
    $tank_you = "Jūsų skundas priimtas, dėkojame už pastabas pasistenksime patobulėti arba NE :D";
    $text = 'nusiskundimai-display-flex';
    $form = 'nusiskundimai-display-none';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <nav class="nav-wrapper">
        <ul class="nav">
            <li><img class="home-logo"
                     src="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/09/Erotic-Logo.jpg" alt="home"><a
                        class="nav-links" href=""></a></li>
            <li><a class="nav-links" href="index.php">Katalogas</a></li>
            <li><a class="nav-links" href="surprise.php">Nustebink mane</a></li>
            <li><a class="nav-links" href="nusiskundimai.php">Nusiskundimai</a></li>
        </ul>
    </nav>
</header>
<main class="nusiskundimai-page-bg">
    <article class="nusiskundimai-wrapper">
        <h1 class="nusiskundimai-title"><?php print $h1 ?></h1>
        <section class="nusiskundimai-form-container <?php print $form ?>">
            <form class="nusiskundimai-form" method="POST">
                <input class="nusiskundimai-form-input" type="text" name="vardas" placeholder="Jūsų vardas" required>
                <input class="nusiskundimai-form-input" type="number" name="age" placeholder="Jūsų amžius" required>
                <textarea class="nusiskundimai-form-textarea" name="text" placeholder="Jūsų skundas"></textarea>
                <div class="nusiskundimai-form-button-container">
                    <button class="nusiskundimai-form-button" type="submit">Siusti</button>
                </div>
            </form>
        </section>
        <section class="nusiskundimai-text-container <?php print $text ?>">
            <h2><?php print $tank_you ?></h2>
            <p><?php print $_POST['text'] ?></p>
        </section>
    </article>
</main>
</body>
</html>
