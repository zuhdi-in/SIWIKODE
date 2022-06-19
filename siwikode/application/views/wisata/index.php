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
<table class="table">
<h2>Wisata</h2>
<thead>
<tr>
<th>No</th>
<th>Id</th>
<th>Nama Wisata</th>
<th>Jenis Kuliner</th>
<th>Jenis Wisata</th>
<th>Deskripsi</th>
<th>Bintang</th>
<th>Kontak</th>
<th>Email</th>
<th>Alamat</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<?php 
$nomor=1;
foreach ($list_wisata->result() as $row) {
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td width="10%">'.$row->id .'</td>';
    echo '<td>'.$row->nama_wisata .'</td>';
    echo '<td>'.$row->jenis_kuliner_id .'</td>';
    echo '<td>'.$row->jenis_wisata_id .'</td>';
    echo '<td>'.$row->deskripsi .'</td>';
    echo '<td>'.$row->bintang .'</td>';
    echo '<td>'.$row->kontak .'</td>';
    echo '<td>'.$row->email .'</td>';
    echo '<td>'.$row->alamat .'</td>';
    echo '<td>
    <a href="'.base_url().'index.php/wisata/view/'.$row->id.'" class="btn btn-success btn-lg active" role="button" aria-pressed="true">View</a>
    <a href="'.base_url().'index.php/wisata/edit/'.$row->id.'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
    <a href="'.base_url().'index.php/wisata/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
    onclick="return hapusDosen(\'Data wisata yang bernama ' .$row->nama_wisata.' Yakin Mau dihapus ? \')">Hapus</a>
    <td/>';
    echo '</tr>';
    $nomor++;
} ?>
</tbody>
</table>
<a href="<?=base_url()?>index.php/wisata/create" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Tambah</a>
</div>