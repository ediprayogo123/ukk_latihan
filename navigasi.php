<div class="card">
    <div class="card-body">
        <h2 class="text-prymary text-center">PEDULI DIRI</h2>
        <p class="text-center text-secondary smal">CATATAN PERJALANAN</p>
    </div>
</div>
<div class="list-group mt-4">
    <a href="?page=home" class="list-group-item <?php if ($page == 'home' || empty($page)) {
                                                    echo "active";
                                                } ?>">Home</a>
    <a href="?page=catatan_perjalanan" class="list-group-item <?php if ($page == 'catatan_perjalanan') {
                                                                    echo "active";
                                                                } ?>">Catatan Perjalanan</a>
    <a href="?page=isi_data" class="list-group-item <?php if ($page == 'isi_data') {
                                                        echo "active";
                                                    } ?>">Isi data</a>
    <a href="?page=logout" class="list-group-item">Logout</a>
</div>