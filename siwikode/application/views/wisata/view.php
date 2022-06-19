<div class="container">
    <div class="main-body">
    <div>
    <h2>Foto WIsata</h2>
    </div>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                <img src="<?=base_url()?>uploads/photos/<?=$objwisata->id?>.jpg" class="" width="300"/>
                    <div class="mt-3">
                    <h4><?=$objwisata->nama_wisata?></h4>
                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p> -->
                    <p class="text-muted font-size-sm">Foto Wisata</p>
                    <p class="text-muted font-size-sm">Di Kota Depok</p>
                    <!--<button class="btn btn-primary">Follow</button>
                    <button class="btn btn-outline-primary">Message</button>
                    -->
                    <?php echo $error;?>

<?php echo form_open_multipart('wisata/upload');?>

<input type="file" name="foto" size="200" />
<input type="hidden" name="idwisata" value="<?=$objwisata->id?>"/>

<br/><br/>

<input type="submit" value="Upload foto" class="btn btn-primary"/>

</form>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->id?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Nama Wisata</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->nama_wisata?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Deskripsi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->deskripsi?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Id Jenis Wisata</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->jenis_wisata_id?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Fasilitas</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->fasilitas?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Bintang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->bintang?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Kontak</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->kontak?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->alamat?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Latlong</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->latlong?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->email?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Web</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->web?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Id Jenis Kuliner</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->jenis_kuliner_id?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Id Login</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$objwisata->id_penanggung_jawab?>
                    </div>
                </div>
                <hr>
                </div>
            </div>

                </div>
            </div>



            </div>
        </div>

        </div>
    </div>