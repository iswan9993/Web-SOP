$(document).ready(function () {
  $("#summernote").summernote({
    height: 200,
    placeholder: "Tulis isi SOP di sini...",
  });

  const tombolForm = document.getElementById("tombol-form");
  const formSop = document.getElementById("form-sop");

  if (tombolForm && formSop) {
    tombolForm.addEventListener("click", function () {
      formSop.style.display = "block";
    });
  }
});

function tutupForm() {
  document.getElementById("form-sop").style.display = "none";
}

$(document).ready(function () {
    $('#summernote').summernote({
        height: 200,
        placeholder: 'Tulis isi SOP di sini...'
    });

    const tombolForm = document.getElementById("tombol-form");
    const formSop = document.getElementById("form-sop");
    const closeButton = document.getElementById("close-button");
    const cancelButton = document.getElementById("cancelButton");

    // Tampilkan form saat ikon diklik
    if (tombolForm && formSop) {
        tombolForm.addEventListener("click", function () {
            formSop.style.display = "block";
        });
    }

    // Tutup form saat X diklik
    closeButton.addEventListener("click", function () {
        formSop.style.display = "none";
    });

    // Reset form saat Cancel diklik
    cancelButton.addEventListener("click", function () {
        document.getElementById("sopForm").reset();
        $('#summernote').summernote('reset');
    });
});
formSop.style.display = "none";