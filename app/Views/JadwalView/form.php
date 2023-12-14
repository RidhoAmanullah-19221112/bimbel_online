<form method="post" action="<?=base_url('Buku/Save')?>">
<label>Judul</label>
    <input type="text" name="judul">
<label>Edisi</label>
    <input type="text" name="edisi">
<label>Cetakan</label>
    <input type="text" name="cetakkan">
<label>Sinopsis</label>
    <textarea name="sinopsis"></textarea>
<label>Kategori</label>
    <input type="text" name="tb_kategori_id">
<label>Penerbit</label>
    <input type="text" name="tb_penerbit_id">
<label>ISBN</label>
    <input type="text" name="isbn">
<label>Penulis</label>
    <input type="text" name="penulis">

<button>Save</button>
</form>