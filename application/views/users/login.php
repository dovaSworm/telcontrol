<br><br><br><br>

<?php echo form_open('users/login'); ?>
<div class="row no-gutters log">
    <div class="col-md-4 offset-md-4">
        <br>
        <h4>Ovu stranicu koriste samo ovlastena lica firme Telcontrol S.R.L. Molimo vas vratite se na pocetnu stranicu klikom na ovaj link <a class="text-danger" href="<?php echo base_url(); ?>">Početna</a></h4>
        <h4>This page is for Telcontrol S.R.L. employes only. Please return to home page. Click on this link <a class="text-danger" href="<?php echo base_url(); ?>">Home</a></h4>
        <br>
        <h3 class="text-center"><?php echo $title; ?></h3>
        <div class="form-group">
            <label for="username">Usrename</label>
            <input type="text" name="username" class="mb-4" required autofocus>
            <label for="username">Password</label>
            <input type="password" name="password" class="mb-2" required autofocus>
            <button type="submit">Login</button>
        </div>
    </div>
</div>


<?php echo form_close(); ?>