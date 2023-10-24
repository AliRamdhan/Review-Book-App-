const radioInputs = document.querySelectorAll(
    '.rating-stars input[type="radio"]'
);
const stars = document.querySelectorAll(".rating-stars label.star");

radioInputs.forEach((radioInput) => {
    radioInput.addEventListener("click", () => {
        const checkedIndex = parseInt(radioInput.value) - 1;

        // Change color of stars
        stars.forEach((star, index) => {
            if (index <= checkedIndex) {
                star.classList.add("text-yellow-400");
            } else {
                star.classList.remove("text-yellow-400");
            }
        });

        // Auto-click other radio inputs
        radioInputs.forEach((otherInput) => {
            if (otherInput !== radioInput) {
                const otherStars =
                    otherInput.parentNode.querySelectorAll("label.star");
                otherStars.forEach((star) =>
                    star.classList.remove("text-yellow-400")
                );

                if (otherInput.value <= radioInput.value) {
                    otherInput.checked = true;
                    otherStars.forEach((star) =>
                        star.classList.add("text-yellow-400")
                    );
                } else {
                    otherInput.checked = false;
                }
            }
        });
    });
});
