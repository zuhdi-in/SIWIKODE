<div class="container">
<h1>Form Kuliner</h1>
<?php echo form_open("kuliner/save"); ?>
  <div class="form-group row">
    <label for="nama_jeniskuliner" class="col-4 col-form-label">NAMA</label> 
    <div class="col-8">
      <input id="nama_jeniskuliner" name="nama_jeniskuliner" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>