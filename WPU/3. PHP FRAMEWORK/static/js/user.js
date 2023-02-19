// Start Ubah Data User
$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#staticBackdropLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-plus-circle'></i> Tambah Data"
    );
    $(".modal-body form").attr(
      "action",
      "http://localhost/truck/static/cpanel/tambahUser"
    );
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-plus-circle'></i> Tambah Data"
    );
    $("#id").val("");
    $("#username").val("");
    $("#nik").val("");
    $("#nama_lengkap").val("");
    $("#email").val("");
    $("#pass").val("");
    $("#sys_admin").val("");
    $("#jabatan").val("");
    $("#region_id").val("");
    $("#plant_id").val("");
    $("#line_id").val("");
    $("#locked").val("");
    $("#aktif").val("");
    $("#fotoLama").val("");
    $("#foto").val("");
  });

  $(".tombolUbahData").on("click", function () {
    $("#staticBackdropLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html(
      "<i class='fas fa-edit'></i> Ubah Data"
    );
    $(".modal-body form").attr(
      "action",
      "http://localhost/truck/static/cpanel/ubahUser"
    );
    // $(".tipeFoto").attr("type", "text");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/truck/static/cpanel/getUbahUser",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#username").val(data.username);
        $("#nik").val(data.nik);
        $("#nama_lengkap").val(data.nama_lengkap);
        $("#email").val(data.email);
        $("#pass").val(data.pass);
        $("#sys_admin").val(data.sys_admin);
        $("#jabatan").val(data.jabatan);
        $("#region_id").val(data.region_id);
        $("#plant_id").val(data.plant_id);
        $("#line_id").val(data.line_id);
        $("#locked").val(data.locked);
        $("#aktif").val(data.aktif);
        $("#fotoLama").val(data.foto);
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
