<div class="col-lg-8 col-md-10 offset-md-1 offset-lg-0 backlight">
    <?php
$kategorija_id = $product['category_id'];
$kategorija = $product['category_name'];
$podkategorija_id = $product['subcategory_id'];
$podkategorija = $product['subcategory_name'];

echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products">Proizvodi</a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/?category_id=' . $kategorija_id . '">' . $kategorija . '</a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/?subcategory=' . $podkategorija_id . '">' . $podkategorija . '</a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/' . $product['id'] . '">' . $product['name'] . '</a></li>';
echo '</ul>';

?>

    <div class="product-card-big">
        <!-- <div class="d-flex justify-content-between"> -->
        <h4 class="text-center"><?php echo $product['name'] ?></h4>

        <!-- </div> -->

        <div class="justify-content-start d-flex">
            <img src="<?php echo base_url(); ?>assets/img/productimg/<?php echo $product['url'] ?>"
                alt="<?php echo $product['url'] ?>">
            <p class="text-justify"><?php echo $product['description'] ?> </p>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6">
                <ul>
                    <?php if(!empty($product['power'])): ;?>
                    <b>Power supply: </b>
                    <?php $karakter_niz = explode('|', $product['power']);?>
                    <?php foreach ($karakter_niz as $string): ?>
                    <li><?php echo $string ?></li>
                    <?php endforeach;?>
                    <?php endif ;?>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <?php if(!empty($product['inputs'])): ;?>
                <p class=""><b>Inputs: </b><?php echo $product['inputs'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['outputs'])): ;?>
                <p class=""><b>Outputs: </b><?php echo $product['outputs'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['resources'])): ;?>
                <p class=""><b>Resources: </b><?php echo $product['resources'] ?> </p>
                    <?php endif ;?>
            </div>
            <div class="col-sm-12 col-md-6">
            <?php if(!empty($product['commodity'])): ;?>
                <p class=""><b>Commodity: </b><?php echo $product['commodity'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['accessories'])): ;?>
                <p class=""><b>Managed accessories: </b><?php echo $product['accessories'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['cable'])): ;?>
                <p class=""><b>Cable kit: </b><?php echo $product['cable'] ?> </p>
                    <?php endif ;?>
            </div>
            <div class="col-sm-12">
            <?php if(!empty($product['parameter'])): ;?>
                <p class=""><b>Parameter programming: </b><?php echo $product['parameter'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['gms'])): ;?>
                <p class=""><b>Internal GMS system: </b><?php echo $product['gms'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['appliances'])): ;?>
                <p class=""><b>Appliances: </b><?php echo $product['appliances'] ?> </p>
                    <?php endif ;?>
                    <?php if(!empty($product['housing'])): ;?>
                <p class=""><b>Housing: </b><?php echo $product['housing'] ?> </p>
                    <?php endif ;?>
                <?php if(!empty($product['other'])): ;?>
                <p class=""><b>Other: </b><?php echo $product['other'] ?> </p>
                    <?php endif ;?>
            </div>
        </div>

        <div class="pl-2 text-primary">
            <?php echo '<a  href="' . base_url() . 'products/?subcategory=' . $podkategorija_id . '"><i>Look more ' . $podkategorija . '</i></a>'; ?>
            <br>
        </div>
        <div id="show-for-admin" class="row no-guttters">
            <div class="col-6 text-center">
                <form action="">
                    <a href="<?php echo base_url(); ?>products/edit/<?php echo $product['id']; ?>"
                        class="btn btn-primary">Edit</a>
                    <input type="hidden" name="zabrisanje" value="<?php echo $product['url']; ?>">
                </form>
            </div>
            <div class="col-6 text-center">
                <?php echo form_open('/products/delete/' . $product['id']); ?>

                <input type="hidden" name="zabrisanje" value="<?php echo $product['url']; ?>">
                <input type="submit" name="brisanje" value="Delete" class="btn btn-danger">
                <!-- <button class="btn btn-danger">Obrisi</button><button class="btn btn-success">Izmeni</button> -->
                </form>
            </div>
        </div>

    </div>

</div>
</div>
</div>
<!-- container end x-->
</section>
</main>