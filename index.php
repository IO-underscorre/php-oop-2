<?php

require_once __DIR__ . '/data/database.php';

$category_filtered = isset($_GET['category']) ? $_GET['category'] : false;
$item_filtered = isset($_GET['item']) ? $_GET['item'] : false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petstore</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require __DIR__ . '/partials/navbar.php'; ?>

    <main>
        <section class="filters">
            <h2>
                Filters
            </h2>

            <form action="index.php" method="GET">
                <menu>
                    <li class="filter-group">
                        <span class="filter-name">Pet:</span>
                        <select name="category" class="filter-option">
                            <option value selected disabled>Chose...</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?php echo $category->species ?>"><?php echo $category->species ?></option>
                            <?php endforeach ?>
                        </select>
                    </li>

                    <li class="filter-group">
                        <span class="filter-name">Item:</span>
                        <select name="item" class="filter-option">
                            <option value selected disabled>Chose...</option>
                            <option value="Bed">Bed</option>
                            <option value="Food">Food</option>
                            <option value="Toy">Toy</option>
                        </select>
                    </li>

                    <li class="filter-group">
                        <button value="submit">Reset all filters</button>
                        <button value="submit">Filter the search</button>
                    </li>
            </form>
        </section>

        <section class="products">
            <h2>
                Products
            </h2>

            <ul class="products-list">
                <?php foreach ($products as $product) : ?>
                    <?php if (($category_filtered == $product->category->species || $category_filtered === false) and ($item_filtered == get_class($product) || $item_filtered === false)) : ?>
                        <li>
                            <?php require __DIR__ . '/partials/card.php'; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach ?>
            </ul>
        </section>
    </main>
</body>

</html>