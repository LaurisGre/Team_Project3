<?php
$show_buy_form = true;

if(isset($_POST['submit'])) {
    $show_buy_form = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pirkimo Forma</title>
</head>

<body>
    <main>
        <article class="buy_box">
            <?php if ($show_buy_form) : ?>
                <h3>Pirkti!</h3>
                <form class="buy_form" method="POST">
                    <input type="num" name="item_ID" required>
                    <input type="num" name="item_size" required>
                    <input class="buy_button" type="submit" name="submit">
                </form>
            <?php else : ?>

            <?php endif; ?>
            
        </article>
    </main>
</body>

</html>