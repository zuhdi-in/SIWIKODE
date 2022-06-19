<div class="container">
<h1>Form Wisata</h1>
<?php echo form_open("wisata/save"); ?>
  <div class="form-group row">
    <label for="nama_wisata" class="col-4 col-form-label">Nama Wisata</label> 
    <div class="col-8">
      <input id="nama_wisata" name="nama_wisata" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="jenis_wisata_id" class="col-4 col-form-label">Id Jenis Wisata</label> 
    <div class="col-8">
    <select class="form-control" id="jenis_wisata_id" name="jenis_wisata_id">
    <?php
                  include "config.php";
                  $result= mysqli_query ($connect, "SELECT * FROM jenis_wisata ");
                    while ($row = mysqli_fetch_array($result))
                  { ?>
                      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                  <?php }  ?>  
                    </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
    <div class="col-8">
      <input id="fasilitas" name="fasilitas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="bintang" class="col-4 col-form-label">Bintang</label> 
    <div class="col-8">
      <input id="bintang" name="bintang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <input id="kontak" name="kontak" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="latlong" class="col-4 col-form-label">Latlong</label> 
    <div class="col-8">
      <input id="latlong" name="latlong" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="web" class="col-4 col-form-label">web</label> 
    <div class="col-8">
      <input id="web" name="web" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="jenis_kuliner_id" class="col-4 col-form-label">ID Jenis Kuliner</label> 
    <div class="col-8">
    <select class="form-control" id="jenis_kuliner_id" name="jenis_kuliner_id">
    <?php
                  include "config.php";
                  $result= mysqli_query ($connect, "SELECT * FROM jenis_kuliner ");
                    while ($row = mysqli_fetch_array($result))
                  { ?>
                      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                  <?php }  ?>  
                    </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="id_penanggung_jawab" class="col-4 col-form-label">Penanggung Jawab Id</label> 
    <div class="col-8">
    <select class="form-control" id="id_penanggung_jawab" name="id_penanggung_jawab">
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
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>