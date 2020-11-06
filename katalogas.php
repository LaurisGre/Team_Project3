<?php
$catalog = [
    '1' => [
        'name' => 'Kutuliukas',
        'photo' => 'https://www.fantazijos.lt/Uploads/Shop/normal/0b77dbc4284d1f4ba952f956be1ff91e.jpg',
    ],
    '2' => [
        'name' => 'Pabarstukas',
        'photo' => 'https://www.fantazijos.lt/Uploads/Shop/normal/6ec608d45bd3154ceda946c5759db45c.jpg',
    ],
    '3' => [
        'name' => 'Gražulis',
        'photo' => 'https://g1.dcdn.lt/images/pix/880x550/sXx5jySxfoc/64c6251f64fb0cdff7-61959329.jpg',
    ],
    '4' =>[
        'name' => 'Putliukas',
        'photo' => 'https://i.chzbgr.com/full/5969473536/h15B8ECDE/beak-and-shoulders-wont-cut-it',
    ],
    '5' =>[
        'name' => 'Kirkutis',
        'photo' => 'https://cdn.funnyisms.com/72efe6fe-6bc8-4775-a07b-ee78f30b6048.jpg',
    ],
    '6' =>[
        'name' => 'Pupulis',
        'photo' => 'https://i.chzbgr.com/full/6562702592/hA576B0C6/untitled',
    ],
    '7' =>[
        'name' => 'Pūkelis',
        'photo' => 'https://i.chzbgr.com/full/8448322816/hA0B79F07/one-kinky-wizard',
    ],
    '8' =>[
        'name' => 'Riaumotojas',
        'photo' => 'https://external-preview.redd.it/6MNYmhB5VTRxRoy614EpLXV_ksijlZhIyqJW0M2_hws.jpg?auto=webp&s=ea2f7674c7b687a022b22d10964aed77684c7d7d',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katalogas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <nav class="nav-wrapper">
            <ul class="nav">
                <li><img class="home-logo" src="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/09/Erotic-Logo.jpg" alt="home"><a class="nav-links" href=""></a></li>
                <li><a class="nav-links" href="index.php">Katalogas</a></li>
                <li><a class="nav-links" href="surprise.php">Nustebink mane</a></li>
                <li><a class="nav-links" href="nusiskundimai.php">Nusiskundimai</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="catalog">
            <?php foreach ($catalog as $product_number => $product): ?>
                <div class="catalog-product-card">
                    <h3><?php print $product['name']; ?></h3>
                    <img class="catalog-product-img" src="<?php print $product['photo']; ?>" alt="photo">
                    <p class="catalog-product-number"><?php print $product_number; ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    
    </main>
    
</body>
</html>
