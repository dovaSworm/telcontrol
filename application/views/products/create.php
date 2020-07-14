<br><br><br><br><br>
<h2><?=$title?></h2>
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
<div class="container-fluid p-5">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('products/create'); ?>
    <div class="container">
        <div class="row d-flex py-4 align-items-center justify-content-center create">

            <div class="form-group col-md-6 col-sm-12">
                <label>Category</label>
                <select name="category_id" id="" class="form-control">
                    <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Subcategory</label>
                <select name="subcategory_id" id="" class="form-control">
                    <?php foreach ($subcategories as $subcategory): ?>
                    <option value="<?php echo $subcategory['id']; ?>"><?php echo $subcategory['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Upload image</label>
                <input type="file" name="userfile" size="20">
            </div>
            <div class="form-group m-auto col-md-6 col-sm-12">
                <label>Recomended</label>
                <input class="mr-auto" type="checkbox" name="recomended" value="accept" />
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
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input type="text" class="form-control" name="power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input type="text" class="form-control" name="gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input name="resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input name="parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input name="inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input name="outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input name="cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input name="accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input name="commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input name="appliances" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ita">
            <div class="">
                <br>
                <h3>Italiano</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="it_name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="it_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="it_housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input type="text" class="form-control" name="it_power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input type="text" class="form-control" name="it_gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input name="it_resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input name="it_parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input name="it_inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input name="it_outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input name="it_cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input name="it_accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input name="it_commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input name="it_appliances" class="form-control"></input>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 srb">
            <div class="">
                <br>
                <h3>Srpski</h3>
                <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="sr_name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="sr_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="sr_housing">
                </div>
                <div class="form-group">
                    <label>Power supply</label>
                    <input type="text" class="form-control" name="sr_power">
                </div>
                <div class="form-group">
                    <label>Internal GMS system</label>
                    <input type="text" class="form-control" name="sr_gms">
                </div>
                <div class="form-group">
                    <label>Resources</label>
                    <input name="sr_resources" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Parameter programming</label>
                    <input name="sr_parameter" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Inputs</label>
                    <input name="sr_inputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <input name="sr_outputs" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Cable kit</label>
                    <input name="sr_cable" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Managed accessories</label>
                    <input name="sr_accessories" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Commodity</label>
                    <input name="sr_commodity" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>Appliances</label>
                    <input name="sr_appliances" class="form-control"></input>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">

        <button type="submit" class="btn btn-primary w-50 d-flex justify-content-center m-auto">Submit</button>
    </div>
    </form>
</div>