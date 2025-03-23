document.addEventListener("DOMContentLoaded", function () {
    console.log("✅ JavaScript Loaded!");

    const buttons = document.querySelectorAll(".favorite-btn");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const destinationId = this.getAttribute("data-id");
            const buttonEl = this;

            fetch("/toggle-favorite", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ destination_id: destinationId })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    const isFavorite = data.favorites.includes(parseInt(destinationId));
                    buttonEl.textContent = isFavorite ? "Remove from Favorites" : "Add to Favorites";
                }
            })
            .catch(err => console.error("Error toggling favorite:", err));
        });
    });
});
