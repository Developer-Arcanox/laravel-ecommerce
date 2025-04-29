// Image upload functionality
const featuredImageUpload = document.getElementById("featuredImageUpload");
const featuredImageInput = document.getElementById("featuredImageInput");
const featuredImagePreview = document.getElementById("featuredImagePreview");

const galleryUpload = document.getElementById("galleryUpload");
const galleryInput = document.getElementById("galleryInput");
const galleryPreview = document.getElementById("galleryPreview");

// Featured image upload
featuredImageUpload.addEventListener("click", function () {
    featuredImageInput.click();
});

featuredImageInput.addEventListener("change", function (e) {
    if (e.target.files.length > 0) {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = function (event) {
            featuredImagePreview.innerHTML = `
                <div class="image-preview">
                    <img src="${event.target.result}" alt="Featured">
                    <div class="remove-btn">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            `;

            // Add remove button functionality
            featuredImagePreview
                .querySelector(".remove-btn")
                .addEventListener("click", function () {
                    featuredImagePreview.innerHTML = "";
                    featuredImageInput.value = "";
                });
        };

        reader.readAsDataURL(file);
    }
});

// Gallery image upload
galleryUpload.addEventListener("click", function () {
    galleryInput.click();
});

galleryInput.addEventListener("change", function (e) {
    if (e.target.files.length > 0) {
        Array.from(e.target.files).forEach((file) => {
            const reader = new FileReader();

            reader.onload = function (event) {
                const imagePreview = document.createElement("div");
                imagePreview.className = "image-preview";
                imagePreview.innerHTML = `
                    <img src="${event.target.result}" alt="Gallery">
                    <div class="remove-btn">
                        <i class="fas fa-times"></i>
                    </div>
                `;

                // Add remove button functionality
                imagePreview
                    .querySelector(".remove-btn")
                    .addEventListener("click", function () {
                        imagePreview.remove();
                    });

                galleryPreview.appendChild(imagePreview);
            };

            reader.readAsDataURL(file);
        });
    }
});

// Remove existing gallery images
galleryPreview.querySelectorAll(".remove-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        this.parentElement.remove();
    });
});

// Variant options functionality
const variantOptions = document.getElementById("variantOptions");
const addVariantOption = document.getElementById("addVariantOption");

addVariantOption.addEventListener("click", function () {
    const optionDiv = document.createElement("div");
    optionDiv.className = "variant-option mb-2";
    optionDiv.innerHTML = `
        <select class="form-select form-select-sm me-2" style="width: 120px;">
            <option selected>Color</option>
            <option>Size</option>
            <option>Material</option>
            <option>Style</option>
        </select>
        <input type="text" class="form-control form-control-sm" placeholder="Add values (comma separated)">
        <span class="variant-remove"><i class="fas fa-times"></i></span>
    `;

    // Add remove functionality
    optionDiv
        .querySelector(".variant-remove")
        .addEventListener("click", function () {
            optionDiv.remove();
        });

    variantOptions.appendChild(optionDiv);
});

// Tags functionality
const tagsList = document.getElementById("tagsList");
const tagInput = document.getElementById("tagInput");

tagInput.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === ",") {
        e.preventDefault();
        const tagText = this.value.trim();
        if (tagText !== "") {
            const tag = document.createElement("span");
            tag.className = "tag";
            tag.innerHTML = `
                ${tagText.replace(",", "")}
                <span class="tag-remove"><i class="fas fa-times"></i></span>
            `;

            // Add remove functionality
            tag.querySelector(".tag-remove").addEventListener(
                "click",
                function () {
                    tag.remove();
                }
            );

            tagsList.insertBefore(tag, tagInput);
            this.value = "";
        }
    }
});

// Remove existing tags
tagsList.querySelectorAll(".tag-remove").forEach((btn) => {
    btn.addEventListener("click", function () {
        this.parentElement.remove();
    });
});

// Initialize Dropzone for drag and drop uploads
Dropzone.autoDiscover = false;

// Initialize featured image dropzone
new Dropzone("#featuredImageUpload", {
    url: "/file-upload",
    autoProcessQueue: false,
    maxFiles: 1,
    acceptedFiles: "image/*",
    init: function () {
        this.on("addedfile", function (file) {
            if (this.files.length > 1) {
                this.removeFile(this.files[0]);
            }

            const reader = new FileReader();
            reader.onload = function (event) {
                featuredImagePreview.innerHTML = `
                    <div class="image-preview">
                        <img src="${event.target.result}" alt="Featured">
                        <div class="remove-btn">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                `;

                // Add remove button functionality
                featuredImagePreview
                    .querySelector(".remove-btn")
                    .addEventListener("click", function () {
                        featuredImagePreview.innerHTML = "";
                    });
            };
            reader.readAsDataURL(file);
        });
    },
});

// Initialize gallery dropzone
new Dropzone("#galleryUpload", {
    url: "/file-upload",
    autoProcessQueue: false,
    acceptedFiles: "image/*",
    init: function () {
        this.on("addedfile", function (file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                const imagePreview = document.createElement("div");
                imagePreview.className = "image-preview";
                imagePreview.innerHTML = `
                    <img src="${event.target.result}" alt="Gallery">
                    <div class="remove-btn">
                        <i class="fas fa-times"></i>
                    </div>
                `;

                // Add remove button functionality
                imagePreview
                    .querySelector(".remove-btn")
                    .addEventListener("click", function () {
                        imagePreview.remove();
                    });

                galleryPreview.appendChild(imagePreview);
            };
            reader.readAsDataURL(file);
        });
    },
});

let addProductSubmitBtn = document.querySelector("#addProductSubmitBtn");
let addProductForm = document.querySelector("#addProductForm");

addProductSubmitBtn.addEventListener("click", () => {
    addProductForm.submit();
});
