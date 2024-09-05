<article class="card">
    <figure>
        <span class="product-category"><?php echo $product->category->species; ?></span>

        <?php if (isset($product->image_url)) : ?>
            <img src="<?php echo $product->image_url; ?>" alt="<?php echo $product->name; ?>">
        <?php endif; ?>
    </figure>

    <div class="details">
        <span class="product-brand">
            <?php echo $product->brand; ?>
        </span>

        <h3 class="product-name">
            <?php echo $product->name; ?>
        </h3>

        <strong class="product-price">
            $ <?php $product->printPrice(); ?>
        </strong>
    </div>
</article>