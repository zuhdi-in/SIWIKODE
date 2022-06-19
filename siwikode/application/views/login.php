<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
  echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>
<form method="post" action="<?php echo base_url('index.php/auth/login'); ?>">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required autofocus>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
    </div>
    <button class="btn btn-lg btn-danger btn-block" type="submit">Login</button>
    <br/>
    <a href="<?php echo base_url('/index.php/regis/create')?>">Daftar</a>
</form>