<div class="container">
<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
<h1>Daftar User</h1>
<?php echo form_open("regis/save"); ?>
  <div class="form-group row">
    <label for="nama_login" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama_login" name="nama_login" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" type="password" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="level" class="col-4 col-form-label">User</label> 
    <div class="col-8">
      <input id="level" name="level" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>