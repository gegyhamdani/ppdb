        <?php
            $id = $_GET['id_pendaftar'];
            $mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
            $sql = "SELECT * FROM calon where id_pendaftar='{$id}'";
            $result = $mydb->query($sql);
            $row = $result->fetch_assoc();
            $result->close();
            $mydb->close();
        ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
            <div class="kotak">
            <form action="nilaitestaksi.php?tipe=tambah" method="POST">
           		<div class="form-group">
                    <label for="status">No. Pendaftar</label>
                    <input type="text" class="form-control" name="id_pendaftar" value="<?php echo $row['id_pendaftar']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Bahasa Indonesia</label>
                    <input type="number" name="indo_ujian" class="form-control"  required >
                </div>
                <div class="form-group">
                    <label for="nama">Matematika</label>
                    <input type="number" name="mtk_ujian" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="nama">IPA</label>
                    <input type="number" name="ipa_ujian" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="nama">Bahasa Inggris</label>
                    <input type="number" name="inggris_ujian" class="form-control" required >
                </div>
                <input name="save" type="submit" class="btn btn-primary" value="Simpan">
            </form>
           
            </div>
            </div>
        </div>
     </section>
</section>