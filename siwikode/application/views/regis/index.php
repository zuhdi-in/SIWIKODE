<script>
function hapusDosen(pesan){
    if (confirm(pesan)){
        return true;
    }
    else{
        return false;
    }
}
</script>
<div class="container">
<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
<table class="table">
<h2>Data User</h2>
<thead>
<tr>
<th>No</th>
<th>Id</th>
<th>Nama</th>
<th>Username</th>
<th>Level</th>
</tr>
</thead>
<tbody>
<?php 
$nomor=1;
foreach ($list_regis->result() as $row) {
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->id_login .'</td>';
    echo '<td>'.$row->nama_login .'</td>';
    echo '<td>'.$row->username .'</td>';
    echo '<td>'.$row->level .'</td>';
    echo '</tr>';
    $nomor++;
} ?>
</tbody>
</table>
<a href="<?=base_url()?>" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Login</a>
</div>
<marquee behavior="" direction="" style="color : RED ;"> <h1>PASSWORD TIDAK DI TAMPILKAN AGAR ORANG LAIN TIDAK MENGETAHUI NYA!!!</h1></marquee>
