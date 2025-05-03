// Simple script to toggle payment methods
document.addEventListener("DOMContentLoaded", function () {
    const paymentMethods = document.querySelectorAll(".payment-method");

    paymentMethods.forEach((method) => {
        method.addEventListener("click", function () {
            // Remove selected class from all methods
            paymentMethods.forEach((m) => m.classList.remove("selected"));

            // Add selected class to clicked method
            this.classList.add("selected");

            // Check the radio button
            const radio = this.querySelector(".form-check-input");
            if (radio) radio.checked = true;
        });
    });

    // Toggle between new address and saved addresses
    const savedAddressesCard = document.querySelector(".checkout-card.d-none");
    const showSavedAddresses = () => {
        savedAddressesCard.classList.remove("d-none");
        document
            .querySelector(".checkout-card:not(.d-none)")
            .classList.add("d-none");
    };

    const showNewAddress = () => {
        savedAddressesCard.classList.add("d-none");
        document
            .querySelector(".checkout-card.d-none + .checkout-card")
            .classList.remove("d-none");
    };

    // Add event listeners for these functions as needed
});
