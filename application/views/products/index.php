<div class="col-lg-8 col-md-10 offset-md-1 offset-lg-0 products-class">
    
    <h3 class="text-center">Products</h3>
        <?php if (!isset($_GET['category'])) {
            // if(count($products)>0)
    $kategorija_id = $products[0]['category_id'];
    $kategorija = $products[0]['category_name'];
    $podkategorija = $products[0]['subcategory_name'];
} else {
    $kategorija_id = $_GET['category'];
}

if (isset($_GET['subcategory'])) {
    $kategorija = $products[0]['category_name'];
    $podkategorija = $products[0]['subcategory_name'];
    echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products">Products</a></li>';
    echo '<li>></li>';
    echo '<li><a href="' . base_url() . 'products/?category=' . $products[0]['category_id'] . '">' . $kategorija . '</a></li>';
    echo '<li>></li>';
    echo '<li><a href="' . base_url() . 'products/?subcategory=' .$products[0]['subcategory_id'] . '">' . $podkategorija . '</a></li>';
    echo '</ul>';

} elseif (!isset($_GET['subcategory']) && isset($_GET['category'])) {
    $kategorija = $products[0]['category_name'];
    $podkategorija = $products[0]['subcategory_name'];
    echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products">Products</a></li>';
    echo '<li>></li>';
    echo '<li><a href="' . base_url() . 'products/?category=' . $kategorija_id . '">' . $kategorija . '</a></li>';
    echo '</ul>';
} else {
    if (!isset($_GET['category']) && !isset($_GET['subcategory'])) {
        echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products">Products</a></li>';
    }

    echo '</ul>';
}
?>
<div class="dddd">
<?php if ($kategorija === "Cooling and refrigeration"): ;?>
        <img src="<?php echo base_url(); ?>assets/img/shemacooling.png" alt="">
<?php endif;?>
    </div>
        <!-- <h2 class="text-center">Naši Products</h2> -->
        <?php foreach ($products as $product): ?>
        <div class="product-card-small">
            <h4><?php echo $product['name'] ?></h4>
                <!-- <h6><small><i>Proizvodjač:</i></small> <b></b></h6> -->

            <div class="row no-gutters">
                <div class="col-sm-12 col-md-6 text-left">
                    <div class="pics">

                        <img src="<?php echo base_url(); ?>assets/img/productimg/<?php echo $product['url'] ?>"
                            alt="tmt-9000s-small">
                    </div>
                    <p class="text-justify mt-2"><?php echo word_limiter($product['description'], 20); ?></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="ml-md-5 ml-lg-0">
                        <b>Power supply:</b>
                        <?php $karakter_niz = explode('|', $product['power']);
$novi_niz = array($karakter_niz[0], $karakter_niz[1] ?? "-", $karakter_niz[2] ?? "-");
?>
                        <?php foreach ($novi_niz as $string): ?>
                        <li><?php echo $string ?></li>
                        <?php endforeach;?>
                    </ul>
                    <p class="text-justify"><b>Housing:
                        </b><?php echo word_limiter($product['housing'], 15); ?></p>
                    <p class="text-justify"><b>Appliances:
                        </b><?php echo word_limiter($product['appliances'], 15); ?></p>
                </div>
            </div>


            <p class="text-primary"><a href="<?php echo site_url('products/view/' . $product['id']); ?>">Read more</a>
            </p>
        </div>
        <?php endforeach;?>
        <div class="pagination-links">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>

</div>
</div>
</div>
<!-- container end -->
</section>
</main>