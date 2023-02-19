<!-- Start Script -->
<script src="<?= BASEURL; ?>/js/visitor/inputkelengkapan.js"></script>
<!-- End Script -->

<form id="formKaryawan" action="<?= BASEURL; ?>/cpanel/tambahUser" method="post" enctype="multipart/form-data">

    <div class="container-sm">

        <!-- Start Right Form -->
        <div class="col-md mx-5 text-center">
            <div class="mb-3">
                <img class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/uploadimage.jpg" class="rounded" />
            </div>
        </div>
        <!-- End Right Form -->

        <!-- Start Center Form -->
        <div class="col-md mx-5">
            <h3>Data Pengunjung</h3>
            <hr>
            <div class="mb-3">
                <label for="id_sopir" class="form-label control-label">ID Sopir</label>
                <input type="text" name="id_sopir" class="form-control" id="id_sopir" value="EXTERNAL" disabled>
            </div>
            <div class="mb-3">
                <label for="nama_sopir" class="form-label control-label">Nama Sopir</label>
                <input type="text" name="nama_sopir" class="form-control" id="nama_sopir">
            </div>
            <div class="mb-3">
                <label for="nama_supplier" class="form-label control-label">Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control" id="nama_supplier">
            </div>
            <div class="mb-3">
                <label for="nama_transporter" class="form-label control-label">Nama Transporter</label>
                <input type="text" name="nama_transporter" class="form-control" id="nama_transporter">
            </div>
            <div class="mb-3">
                <label for="jenis_shipment" class="form-label control-label">Jenis Shipment</label>
                <input type="text" name="jenis_shipment" class="form-control" id="jenis_shipment" value="<?= $_SESSION['jenis_shipment'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id_shipment" class="form-label control-label">ID Shipment</label>
                <input type="text" name="id_shipment" class="form-control" id="id_shipment" value="<?= $_SESSION['id_shipment'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="no_polisi" class="form-label control-label">No Polisi</label>
                <input type="text" name="no_polisi" class="form-control" id="no_polisi" value="<?= $_SESSION['no_polisi'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="jam_pemeriksaan" class="form-label control-label">Jam Pemeriksaan</label>
                <input type="text" name="jam_pemeriksaan" class="form-control" id="jam_pemeriksaan" value="<?= date('H:i:s T') ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="tanggal_pemeriksaan" class="form-label control-label">Tanggal Pemeriksaan</label>
                <input type="text" name="tanggal_pemeriksaan" class="form-control" id="tanggal_pemeriksaan" value="<?= date('d-m-Y') ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="petugas_pemeriksa" class="form-label control-label">Petugas Pemeriksa</label>
                <input type="text" name="petugas_pemeriksa" class="form-control" id="petugas_pemeriksa" disabled>
            </div>
            <div class="mb-3">
                <label for="plant_id" class="form-label control-label">Lokasi Plant</label>
                <input type="text" name="plant_id" class="form-control" id="plant_id" disabled>
            </div>
        </div>
        <!-- End Center Form -->

        <!-- Start Left Form -->
        <div class="col-md mx-5 mt-5 text-center">
            <div class="form-check-inline">
                <span class="h3">Data Kelengkapan | </span>
                <span class="h5"><?= date("d-m-Y,H:i:s T") ?></span>
            </div>
            <hr>

            <div class="mb-3">
                <label for="keperluan" class="form-label control-label h5">Kondisi Ban Utama</label>
                <div>
                    <label id="id_1" onclick="callFn(this.id);">
                        <input class="form-check-input px-3 pt-3 pb-3 " type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#kondisiBanUtama">
                        </a>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="suhu_tubuh" class="form-label control-label h5">Kebocoran Rem</label>
                <div>
                    <label id="id_1" onclick="callFn(this.id);">
                        <input class="form-check-input px-3 pt-3 pb-3 " type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#kebocoranRem">
                        </a>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenis_shipment" class="form-label control-label">Rem Tangan</label>
                <input type="text" name="jenis_shipment" class="form-control" id="jenis_shipment" value="<?= $_SESSION['jenis_shipment'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id_shipment" class="form-label control-label">Sopir Dapat DDT</label>
                <input type="text" name="id_shipment" class="form-control" id="id_shipment" value="<?= $_SESSION['id_shipment'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="no_polisi" class="form-label control-label">Hasil Pemeriksaan</label>
                <input type="text" name="no_polisi" class="form-control" id="no_polisi" value="<?= $_SESSION['no_polisi'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="kartu_visitor" class="form-label control-label">Komentar Kerusakan</label>
                <input type="number" name="kartu_visitor" class="form-control" id="kartu_visitor" value="0">
            </div>
            <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="sudah_induksi" value="sudah_induksi">
                                        <label class="form-check-label" for="sudah_induksi">Sudah Induksi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="paham_prosedur" value="paham_prosedur">
                                        <label class="form-check-label" for="paham_prosedur">Paham Prosedur Safety</label>
                                    </div> -->
            <div class="mt-4 mb-5 float-end">
                <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                <button type="submit" class="btn btn-success fw-bold" onclick="submitResult(event);">Simpan</button>
            </div>
        </div>
        <!-- End Left Form -->

    </div>

    <!-- Start Kondisi Ban Utama Modal -->
    <div class="modal fade" id="kondisiBanUtama" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="kondisiBanUtamaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="kondisiBanUtamaLabel">Control Check Point</h1>
                    <a class="btn btn-danger fw-bold float-end" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</a>
                </div>
                <div class="modal-body">
                    <div class="col-md mx-5">
                        <div class="text-center">
                            <span class="h2 text-success">Temuan</span>
                            <hr>
                        </div>
                        <div class="col mb-3 text-center">
                            <label for="temuan_ban" class="form-label h3 mt-3">Kondisi Ban Utama</label>
                            <textarea name="temuan_ban" class="form-control" id="temuan_ban"></textarea>
                        </div>
                        <div class="col mb-3 text-center">
                            <img id="temuanBan" class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/uploadimage.jpg" class="rounded" />
                        </div>
                        <div class="col mb-3 text-center">
                            <input type="file" class="form-control" name="upload_temuan_ban" id="upload_temuan_ban" accept="image/*" capture onchange="loadFotoTemuanBan(event)" hidden>
                            <label for="upload_temuan_ban"><a class="btn btn-secondary fw-bold" for="upload_temuan_ban"><i class="fas fa-camera"></i> Uploud Foto</a></label>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Kondisi Ban Utama Modal -->

    <!-- Start Kebocoran Rem Modal -->
    <div class="modal fade" id="kebocoranRem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="kebocoranRemLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="kebocoranRemLabel">Control Check Point</h1>
                    <a class="btn btn-danger fw-bold float-end" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</a>
                </div>
                <div class="modal-body">
                    <div class="col-md mx-5">
                        <div class="text-center">
                            <span class="h2 text-success">Temuan</span>
                            <hr>
                        </div>
                        <div class="col mb-3 text-center">
                            <label for="temuan_kebocoran_rem" class="form-label h3 mt-3">Kebocoran Rem</label>
                            <textarea name="temuan_kebocoran_rem" class="form-control" id="temuan_kebocoran_rem"></textarea>
                        </div>
                        <div class="col mb-3 text-center">
                            <img id="temuanKebocoranRem" class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/uploadimage.jpg" class="rounded" />
                        </div>
                        <div class="col mb-3 text-center">
                            <input type="file" class="form-control" name="upload_temuan_kebocoran_rem" id="upload_temuan_kebocoran_rem" accept="image/*" capture onchange="loadFotoTemuanKebocoranRem(event)" hidden>
                            <label for="upload_temuan_kebocoran_rem"><a class="btn btn-secondary fw-bold" for="upload_temuan_kebocoran_rem"><i class="fas fa-camera"></i> Uploud Foto</a></label>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Kebocoran Rem Modal -->
</form>