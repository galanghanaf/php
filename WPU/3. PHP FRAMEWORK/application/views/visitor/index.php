<div class="container-sm mt-5">
    <div class="card text-center">
        <div class="card-header fw-bold">
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <!-- <a href="" class="btn btn-primary">Mulai</a> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" href="#truckInspectionModal" role="button">
                Mulai
            </button>
        </div>
        <div class=" card-footer text-muted">

        </div>
    </div>
</div>


<!-- Start Modal -->
<div class="modal fade modal-sheet py-5" id="truckInspectionModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="truckInspectionModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0 mb-3 text-center">
                <h1 class="modal-title fs-3" id="staticBackdropLabel">Driver & Helper Sudah Register?</h1>
            </div>
            <div class="modal-footer text-center flex-column border-top-0">
                <button class="btn btn-primary btn btn-lg btn-primary w-100 mx-0 mb-2" data-bs-target="#truckInspectionModal2" data-bs-toggle="modal">
                    <h4>Sudah</h4>
                </button>
                <a href="<?= BASEURL; ?>/" class="btn btn-lg btn-danger w-100 mx-0">
                    <h4>Belum</h4>
                </a>
            </div>

        </div>
    </div>
</div>
<div class="modal fade modal-sheet py-5" id="truckInspectionModal2" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="truckInspectionModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer text-center flex-column border-top-0">
                <a href="<?= BASEURL; ?>/visitor/fgtruck" class="btn btn-lg btn-primary w-100 mx-0 mb-2">
                    <h2>FG Truck</h2>
                </a>
                <a href="<?= BASEURL; ?>/visitor/materialtruck" class="btn btn-lg btn-success w-100 mx-0">
                    <h2>Material Truck</h2>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->