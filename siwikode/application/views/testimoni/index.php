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
<table class="table">
<h2>Testimoni</h2>
<thead>
<tr>
<th>No</th>
<th>Id</th>
<th>Nama Profesi</th>
<th>Nama Wisata</th>
<th>User Login</th>
<th>Email</th>
<th>Rating</th>
<th>Komentar</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<?php 
$nomor=1;
foreach ($list_testimoni->result() as $row) {
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->id .'</td>';
    echo '<td>'.$row->nama_profesi .'</td>';
    echo '<td>'.$row->nama_wisata .'</td>';
    echo '<td>'.$row->nama_login .'</td>';
    echo '<td>'.$row->email .'</td>';
    echo '<td>'.$row->rating .'</td>';
    echo '<td>'.$row->komentar .'</td>';
    echo '<td>
    <a href="'.base_url().'index.php/testimoni/edit/'.$row->id.'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
    <a href="'.base_url().'index.php/testimoni/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
    onclick="return hapusDosen(\'Data Testimoni ' .$row->nama_login.' Yakin Mau dihapus ? \')">Hapus</a>
    <td/>';
    echo '</tr>';
    $nomor++;
} ?>
</tbody>
</table>
<a href="<?=base_url()?>index.php/testimoni/create" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Tambah</a>
