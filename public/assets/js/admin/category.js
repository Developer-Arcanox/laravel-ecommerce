// Enable delete button only when checkbox is checked
document.getElementById('confirmDelete').addEventListener('change', function () {
    document.getElementById('deleteButton').disabled = !this.checked;
});

// Image upload preview functionality
document.querySelectorAll('.btn-upload input[type="file"]').forEach(input => {
    input.addEventListener('change', function () {
        const preview = this.closest('.avatar-upload').querySelector('.avatar-preview');
        const file = this.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.style.backgroundImage = `url(${e.target.result})`;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    });
});

// Form Submit 

let categorySubmitBtn = document.querySelector("#categorySubmit")
let categoryForm = document.querySelector("#categoryForm")

categorySubmitBtn.addEventListener("click", () => {
    categoryForm.submit();
})
