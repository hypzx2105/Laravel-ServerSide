document.addEventListener("DOMContentLoaded", function () {
    const images = [
        "/images/panama1.jpg",
        "/images/panama2.jpg",
        "/images/panama3.webp",
        "/images/panama4.jpg"
    ];

    let currentIndex = 0;
    const slider = document.getElementById("imageSlider");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    function updateSlider() {
        if (slider) {
            slider.style.backgroundImage = `url('${images[currentIndex]}')`;
        }
    }

    prevBtn?.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateSlider();
    });

    nextBtn?.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlider();
    });

    setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlider();
    }, 4000);

    updateSlider();
});
