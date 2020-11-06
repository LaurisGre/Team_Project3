<?php
$show_buy_form = true;
$bought_item = [];

if(isset($_POST['submit'])) {
    $show_buy_form = false;
    $bought_item['ID'] = $_POST['item_ID'];
    $bought_item['name'] = $product[$_POST['item_ID']]['name'];
    $bought_item['photo'] = $product[$_POST['item_ID']]['photo'];
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
                <div class="catalog-product-card">
                    <h3><?php print $bought_item['name']; ?></h3>
                    <img
                        class="catalog-product-img"
                        src="<?php print $bought_item['photo']; ?>"
                        alt="photo"
                    >
                    <p><?php print $bought_item['ID']; ?></p>
                </div>
            <?php endif; ?>
        </article>
    </main>
</body>

</html>