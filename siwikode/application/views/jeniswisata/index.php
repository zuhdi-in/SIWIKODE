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
<h2>Jenis Wisata</h2>
<thead>
<tr>
<th>No</th>
<th>ID</th>
<th>NAMA</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<?php 
$nomor=1;
foreach ($list_jeniswisata->result() as $row) {
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->id .'</td>';
    echo '<td>'.$row->nama_jeniswisata .'</td>';
    echo '<td>
    <a href="'.base_url().'index.php/jeniswisata/edit/'.$row->id.'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
    <a href="'.base_url().'index.php/jeniswisata/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
    onclick="return hapusDosen(\'Data jenis Wisata yang bernama ' .$row->nama_jeniswisata.' Yakin Mau dihapus ? \')">Hapus</a>
    <td/>';
    echo '</tr>';
    $nomor++;
} ?>
</tbody>
</table>
<a href="<?=base_url()?>index.php/jeniswisata/create" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Tambah</a>