// Start DataTables Karyawan
$(document).ready(function () {
  $("#tbl_karyawan").DataTable({
    dom: "Bfrtip",
    bLengthChange: false,
    columnDefs: [
      {
        targets: 0,
        searchable: true,
        visible: false,
      },
    ],
    buttons: [
      {
        extend: "excel",
        text: "<i class='fas fa-lg fa-download text-black'></i>",
        titleAttr: "Download Data Excel",
      },
    ],
    order: [],
    columnDefs: [
      {
        targets: "no-sort",
        orderable: false,
      },
    ],
    rowReorder: {
      selector: "td:nth-child(2)",
    },
    responsive: true,
  });
});
// End DataTables Karyawan

// Start sweetalert Karyawan
function deleteResult(url) {
  Swal.fire({
    title: "Apakah Anda Yakin?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DC3545",
    cancelButtonColor: "#6C757D",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = url;
    }
  });
}

// Start Submit Ubah Data SweetAlert
function submitResult(e) {
  e.preventDefault();
  Swal.fire({
    title: "Apakah Anda Yakin?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    cancelButtonColor: "#DC3545",
    confirmButtonText: "Ya, Tambah Data!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById("formKaryawan").submit();
    }
  });
}
// End sweetalert Karyawan
var loadFoto = function (event) {
  var output = document.getElementById("tampilanFoto");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
