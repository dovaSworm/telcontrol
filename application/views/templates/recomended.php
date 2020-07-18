<div class="col col-lg-8 col-12">
    <h3 class="text-center">&nbspRecomended products&nbsp<i class="far fa-thumbs-up"></i></h3>
    <!-- <div class="w-100 d-flex pattern">
                <div class="light"></div><div class="red"></div><div class="dark"></div>
            </div> -->
    <div class="row no-gutters d-flex justify-content-around mt-4">
        <?php foreach ($products as $product): ?>
        <div class="product-card flex-column">
            <a href="<?php echo site_url('products/view/' . $product['id']); ?>">
                <img src="<?php echo base_url(); ?>assets/img/productimg/<?php echo $product['url'] ?>"
                    alt="Prva slika ">
                <h4><?php echo $product['name']; ?></h4>

                <p><?php echo $product['housing']; ?></p>
                <p><?php echo $product['appliances']; ?></p>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
</div>
</div>
</div>
<!-- container end -->
</section>