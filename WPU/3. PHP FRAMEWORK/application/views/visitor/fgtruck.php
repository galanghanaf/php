<!-- Start Modal -->
</h1>
<div class="modal fade modal-sheet py-5" id="truckInspectionModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="truckInspectionModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0 mb-0 px-0">
            </div>
            <div class="modal-body mb-1 text-center fw-bold">
                <h1 class="modal-title fs-1" id="staticBackdropLabel">FG Truck</h1>
            </div>
            <div class="modal-footer text-center flex-column border-top-0">
                <button class="btn btn-primary btn btn-lg btn-primary w-100 mx-0 mb-2" data-bs-target="#truckInspectionModal2" data-bs-toggle="modal">
                    <h4>GATE 1</h4>
                </button>
                <a href="<?= BASEURL; ?>/" class="btn btn-c btn-success w-100 mx-0">
                    <h4>GATE 2</h4>
                </a>
            </div>

        </div>
    </div>
</div>
<div class="modal fade modal-sheet py-5" id="truckInspectionModal2" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="truckInspectionModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header">
                <h1></h1>
            </div>

            <div class="modal-footer text-center flex-column border-top-0">
                <div class="modal-body pt-0">
                    <form action="<?= BASEURL; ?>/visitor/inputvisitor" method="post">
                        <input type="text" class="form-control form-control-lg rounded-3" name="jenis_shipment" id="jenis_shipment" value="FG" hidden>
                        <div class="mb-4 text-dark">
                            <label for="no_polisi" class="fw-bold mb-1 h5">Nomor Polisi</label>
                            <input type="text" class="form-control form-control-lg rounded-3" name="no_polisi" id="no_polisi">
                        </div>
                        <div class="mb-3 text-dark">
                            <label for="id_shipment" class="fw-bold mb-1 h5">ID Shipment</label>
                            <input type="text" class="form-control form-control-lg rounded-3" name="id_shipment" id="id_shipment">
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end Modal -->

<!--Modal JS Script -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#truckInspectionModal").modal('show');
    });
</script>