<div class="container">
<h1>Form Edit Data Jenis Wisata</h1>
<?php echo form_open("jeniswisata/save"); ?>
  <div class="form-group row">
    <label for="nama_jeniswisata" class="col-4 col-form-label">NAMA</label> 
    <div class="col-8">
      <input id="nama_jeniswisata" name="nama_jeniswisata" type="text" value="<?=$objjeniswisata->nama_jeniswisata?>" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Update</button>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?=$objjeniswisata->id?>"/>
<?php echo form_close()?>
</div>