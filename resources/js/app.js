document.addEventListener("DOMContentLoaded", function () {
    console.log("✅ JavaScript Loaded!");

    const buttons = document.querySelectorAll(".favorite-btn");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const destinationId = this.getAttribute("data-id");
            const buttonEl = this;

            fetch("/favorites/toggle", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ destination_id: destinationId })
            })
            .then(res => {
                if (!res.ok) throw new Error("Network error");
                return res.json();
            })
            .then(data => {
                if (data.status === "added") {
                    buttonEl.textContent = "Remove from Favorites";
                    buttonEl.classList.remove("bg-gray-200", "hover:bg-gray-300", "text-gray-800");
                    buttonEl.classList.add("bg-red-500", "hover:bg-red-600", "text-white");
                } else if (data.status === "removed") {
                    buttonEl.textContent = "Add to Favorites";
                    buttonEl.classList.remove("bg-red-500", "hover:bg-red-600", "text-white");
                    buttonEl.classList.add("bg-gray-200", "hover:bg-gray-300", "text-gray-800");
                }
            })
            .catch(err => console.error("❌ Error toggling favorite:", err));
        });
    });
});
