$(document).ready(function () {
  // Inisialisasi Summernote
  $("#summernote").summernote({
    height: 200,
    placeholder: "Tulis isi SOP di sini...",
  });

  const tombolForm = document.getElementById("tombol-form");
  const formSop = document.getElementById("form-sop");
  const closeButton = document.getElementById("close-button");
  const cancelButton = document.getElementById("cancelButton");

  // Sembunyikan form di awal
  if (formSop) {
    formSop.style.display = "none";
  }

  // Tampilkan form saat tombol form diklik
  if (tombolForm && formSop) {
    tombolForm.addEventListener("click", function () {
      formSop.style.display = "block";
    });
  }

  // Tutup form saat tombol X diklik
  if (closeButton && formSop) {
    closeButton.addEventListener("click", function () {
      formSop.style.display = "none";
    });
  }

  // Reset form saat Cancel diklik
  if (cancelButton && formSop) {
    cancelButton.addEventListener("click", function () {
      document.getElementById("sopForm").reset();
      $("#summernote").summernote("reset");
    });
  }

  $("#sopForm").submit(function (e) {
    var isiSop = $("#summernote").summernote("code");
    $("textarea[name='isi_sop']").val(isiSop);
  });
});
