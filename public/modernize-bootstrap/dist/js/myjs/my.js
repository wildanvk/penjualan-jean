$(document).ready(function () {
  $("#myTable").DataTable({
    responsive: true,
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    language: {
      emptyTable: "Tidak Ada Data",
      lengthMenu: "Lihat :  _MENU_  Data",
      search: "Cari ",
      searchPlaceholder: "Ketikkan Kata Kunci",
    },
    dom: '<"d-flex justify-content-between px-4"fl>t<"d-flex justify-content-between px-4"ip>',
  });
});

function previewFoto() {
  const foto = document.querySelector("#gambar_produk");
  const fotoPreview = document.querySelector("#image-preview");

  const fileFoto = new FileReader();
  fileFoto.readAsDataURL(foto.files[0]);

  fileFoto.onload = function (e) {
    fotoPreview.src = e.target.result;
  };
}
