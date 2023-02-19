// Start Ubah Data User
$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#staticBackdropLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-plus-circle'></i> Tambah Data"
    );
    $(".modal-body form").attr(
      "action",
      "http://192.168.18.2/truck/static/cpanel/tambahUser"
    );
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-plus-circle'></i> Tambah Data"
    );
    $("#nik").attr("disabled", false);
    $("#nama_lengkap").attr("disabled", false);
    $("#jenis_kelamin").attr("disabled", false);
    $("#no_tlp").attr("disabled", false);
    $("#tipe_id").attr("disabled", false);

    $("#id").val("");
    $("#nik").val("");
    $("#nama_lengkap").val("");
    $("#jenis_kelamin").val("");
    $("#no_tlp").val("");
    $("#foto").val("");
  });

  $(".tombolUbahData").on("click", function () {
    $("#staticBackdropLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-edit'></i> Ubah Data"
    );
    $(".modal-body form").attr(
      "action",
      "http://192.168.18.2/truck/static/visitor/ubahKaryawan"
    );
    // $(".tipeFoto").attr("type", "text");

    const id = $(this).data("id");

    $.ajax({
      url: "http://192.168.18.2/truck/static/visitor/getUbahKaryawan",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nik").val(data.nik);
        $("#nama_lengkap").val(data.nama_lengkap);
        $("#jenis_kelamin").val(data.jenis_kelamin);
        $("#no_tlp").val(data.no_tlp);
        $("#foto").val(data.foto);
      },
    });
  });
});
// End Ubah Data User

// Start DataTables User
$(document).ready(function () {
  $("#tbl_user").DataTable({
    dom: "Bfrtip",
    bLengthChange: false,

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
  });
});
// End DataTables User

// Start sweetalert Karyawan
function submitResult(e) {
  e.preventDefault();
  Swal.fire({
    title: "Apakah Anda Yakin?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#198754",
    cancelButtonColor: "#DC3545",
    confirmButtonText: "Ya, Simpan!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById("formUser").submit();
    }
  });
}

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
// End sweetalert Karyawan

// End sweetalert Karyawan
var loadFoto = function (event) {
  var output = document.getElementById("tampilanFoto");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
