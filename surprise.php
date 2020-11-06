<?php
$show_surprise_form = true;
$surprise_item = [];

if (isset($_POST['submit'])) {
    $show_buy_form = false;
    $rand_item = rand(0, 7);
    $surprise_item['ID'] = $rand_item;
    $surprise_item['name'] = $product[$rand_item]['name'];
    $surprise_item['photo'] = $product[$rand_item]['photo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style">
    <title>Document</title>
</head>

<body>
    <main>
        <article class="surprise_box">
            <?php if ($show_surprise_form) : ?>
                <h3>Pirkti!</h3>
                <form class="surprise_form" method="POST">
                    <input class="surprise_button" type="submit" name="submit">
                </form>
            <?php else : ?>
                <div class="catalog-product-card">
                    <h3><?php print $surprise_item['name']; ?></h3>
                    <img class="catalog-product-img" src="<?php print $bought_item['photo']; ?>" alt="photo">
                    <p><?php print $surprise_item['ID']; ?></p>
                </div>
            <?php endif; ?>
        </article>
    </main>
</body>

</html>