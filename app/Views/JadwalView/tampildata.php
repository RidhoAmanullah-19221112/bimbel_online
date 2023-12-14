<a href="<?=base_url('/Buku/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Judul</td>
            <td>Edisi</td>
            <td>Cetakkan</td>
            <td>Sinopsis</td>
            <td>Kategori</td>
            <td>Penerbit</td>
            <td>ISBN</td>
            <td>Penulis</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_buku as $baris):?>
            <tr>
                <td><?=$baris['judul']?></td>
                <td><?=$baris['edisi']?></td>
                <td><?=$baris['cetakkan']?></td>
                <td><?=$baris['sinopsis']?></td>
                <td><?=$baris['tb_kategori_id']?></td>
                <td><?=$baris['tb_penerbit_id']?></td>
                <td><?=$baris['isbn']?></td>
                <td><?=$baris['penulis']?></td>
                <td><a href="<?=base_url('Buku/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('Buku/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
