// Start Submit Ubah Data SweetAlert
function submitResult(e) {
  e.preventDefault();
  Swal.fire({
    title: "Apakah Anda Yakin?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    cancelButtonColor: "#DC3545",
    confirmButtonText: "Ya, Ubah Data!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById("formKaryawan").submit();
    }
  });
}
// End Submit Ubah Data SweetAlert
var loadFoto = function (event) {
  var output = document.getElementById("tampilanFoto");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
