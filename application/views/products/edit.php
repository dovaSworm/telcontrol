<br><br><br><br><br>
<script>
function langChange(lang) {
    if (lang == 2) {
        console.log("srb");
        $(".srb").addClass("show");
        // $(".col-md-6").addClass("order-first");
        $(".ita").removeClass("show");
    } else {
        console.log('ita');
        $(".ita").addClass("show");
        $(".srb").removeClass("show");
    }
}
</script>
<h2 class="text-center"><?= $page_title ?></h2>
<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('products/update'); ?>
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
    <input type="hidden" name="image" value="<?php echo $product['url']; ?>">
    <div class="container">
        <div class="row d-flex py-4 align-items-center justify-content-center create">

            <div class="form-group col-md-6 col-sm-12">
                <label>Category</label>
                <select name="category_id" id="" class="form-control">
                    <?php foreach ($categories as $category): ?>
                    <option <?= $category['id']==$product['category_id']? "selected":""?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Subcategory</label>
                <select name="subcategory_id" id="" class="form-control">
                    <?php foreach ($subcategories as $subcategory): ?>
                    <option <?= $subcategory['id']==$product['subcategory_id']? "selected":""?> value="<?php echo $subcategory['id']; ?>"><?php echo $subcategory['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Upload image</label>
                <input value="<?php echo $product['url'] ; ?>" type="file" name="userfile" size="20">
            </div>
            <div class="form-group m-auto col-md-6 col-sm-12">
                <label>Recomended</label>
                <input value="<?php echo $product['recomended'] ; ?>" class="mr-auto" type="checkbox" name="recomended" value="accept" />
            </div>
            <div class="d-flex w-50 m-auto lang">
                <button onclick="langChange(1);" type="button" class="italy-btn btn">Italiano</button>
                <button onclick="langChange(2);" type="button" class="srb-btn btn">Srpski</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 eng m-auto">
            <div class="">
                <br>
                <h3>English</h3>
                <div class="form-group">
                    <label>Name</label>
                    <input value="<?php echo $product['name'] ; ?>" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea value="<?php echo $product['description'] ; ?>" name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input value="<?php echo $product['housing'] ; ?>" type="text" class="form-control" name="housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input value="<?php echo $product['power'] ; ?>" type="text" class="form-control" name="power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input value="<?php echo $product['gms'] ; ?>" type="text" class="form-control" name="gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input value="<?php echo $product['resources'] ; ?>" name="resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input value="<?php echo $product['parameter'] ; ?>" name="parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input value="<?php echo $product['inputs'] ; ?>" name="inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input value="<?php echo $product['outputs'] ; ?>" name="outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input value="<?php echo $product['cable'] ; ?>" name="cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input value="<?php echo $product['accessories'] ; ?>" name="accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input value="<?php echo $product['commodity'] ; ?>" name="commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input value="<?php echo $product['appliances'] ; ?>" name="appliances" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ita">
            <div class="">
                <br>
                <h3>Italiano</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input value="<?php echo $product['it_name'] ; ?>" type="text" class="form-control" name="it_name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea value="<?php echo $product['it_description'] ; ?>" name="it_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input value="<?php echo $product['it_housing'] ; ?>" type="text" class="form-control" name="it_housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input value="<?php echo $product['it_power'] ; ?>" type="text" class="form-control" name="it_power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input value="<?php echo $product['it_gms'] ; ?>" type="text" class="form-control" name="it_gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input value="<?php echo $product['it_resources'] ; ?>" name="it_resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input value="<?php echo $product['it_parameter'] ; ?>" name="it_parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input value="<?php echo $product['it_inputs'] ; ?>" name="it_inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input value="<?php echo $product['it_outputs'] ; ?>" name="it_outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input value="<?php echo $product['it_cable'] ; ?>" name="it_cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input value="<?php echo $product['it_accessories'] ; ?>" name="it_accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input value="<?php echo $product['it_commodity'] ; ?>" name="it_commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input value="<?php echo $product['it_appliances'] ; ?>" name="it_appliances" class="form-control"></input>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 srb">
            <div class="">
                <br>
                <h3>Srpski</h3>
                <div class="form-group">
                    <label>Name</label>
                    <input value="<?php echo $product['sr_name'] ; ?>" type="text" class="form-control" name="sr_name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea value="<?php echo $product['sr_description'] ; ?>" name="sr_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input value="<?php echo $product['sr_housing'] ; ?>" type="text" class="form-control" name="sr_housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input value="<?php echo $product['sr_power'] ; ?>" type="text" class="form-control" name="sr_power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input value="<?php echo $product['sr_gms'] ; ?>" type="text" class="form-control" name="sr_gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input value="<?php echo $product['sr_resources'] ; ?>" name="sr_resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input value="<?php echo $product['sr_parameter'] ; ?>" name="sr_parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input value="<?php echo $product['sr_inputs'] ; ?>" name="sr_inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input value="<?php echo $product['sr_outputs'] ; ?>" name="sr_outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input value="<?php echo $product['sr_cable'] ; ?>" name="sr_cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input value="<?php echo $product['sr_accessories'] ; ?>" name="sr_accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input value="<?php echo $product['sr_commodity'] ; ?>" name="sr_commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input value="<?php echo $product['sr_appliances'] ; ?>" name="sr_appliances" class="form-control"></input>
                </div>
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>