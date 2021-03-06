<?php
if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];
    $file = "file/" . $nik . "-" . $nama . ".txt";
    $fh = fopen($file, "a");
    $cek_baris = fopen($file, "r");
    $baris = fgets($cek_baris);
    if ($baris) {
        $isi_data = "\n" . $tanggal . "|" . $jam . "|" . $lokasi . "|" . $suhu;
    } else {
        $isi_data = $tanggal . "|" . $jam . "|" . $lokasi . "|" . $suhu;
    }
    fwrite($fh, $isi_data);
    fclose($fh);
    $alert = "<div class='alert alert-success mb-4'>Anda berhasil menambah data catatan
perjalanan</div>";
    echo "<meta http-equiv='refresh', content='2; url=?page=isi_data'>";
}
?>
<div class="card">
    <div class="card-header bg-primary text-white">
        FORM TAMBAH DATA CATATAN PERJALANAN
    </div>
    <div class="card-body py-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <?php echo @$alert; ?>
                <form action="" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                    <label for="">Jam</label>
                    <input type="time" name="jam" class="form-control mt-2 mb-4" required>
                    <label for="">Lokasi yang dikunjungi</label>
                    <input type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                    <label for="">Suhu tubuh</label>
                    <input type="number" name="suhu" class="form-control mt-2 mb-4" required>
                    <div class="form-inline">
                        <button name="simpan" class="btn btn-primary">Simpan</button>
                        <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>