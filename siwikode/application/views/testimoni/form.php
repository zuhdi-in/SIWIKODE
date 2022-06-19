<div class="container">
<h1>Form Testimoni</h1>
<?php echo form_open("testimoni/save"); ?>
<div class="form-group row">
    <label for="id_login" class="col-4 col-form-label">Id Login</label> 
    <div class="col-8">
    <select class="form-control" id="id_login" name="id_login">
    <?php
                  include "config.php";
                  $result= mysqli_query ($connect, "SELECT * FROM login ");
                    while ($row = mysqli_fetch_array($result))
                  { ?>
                      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                  <?php }  ?>  
                    </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="wisata_id" class="col-4 col-form-label">Id Wisata</label> 
    <div class="col-8">
    <select class="form-control" id="wisata_id" name="wisata_id">
    <?php
                  include "config.php";
                  $result= mysqli_query ($connect, "SELECT * FROM wisata ");
                    while ($row = mysqli_fetch_array($result))
                  { ?>
                      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                  <?php }  ?>  
                    </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="profesi_id" class="col-4 col-form-label">ID Profesi</label> 
    <div class="col-8">
    <select class="form-control" id="profesi_id" name="profesi_id">
    <?php
                  include "config.php";
                  $result= mysqli_query ($connect, "SELECT * FROM profesi ");
                    while ($row = mysqli_fetch_array($result))
                  { ?>
                      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                  <?php }  ?>  
                    </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="rating" class="col-4 col-form-label">Rating</label> 
    <div class="col-8">
      <input id="rating" name="rating" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="komentar" class="col-4 col-form-label">Komentar</label> 
    <div class="col-8">
      <input id="komentar" name="komentar" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>