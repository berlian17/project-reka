(function() {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeBtn = document.getElementById("closeImageModal");
    const zoomButtons = document.querySelectorAll(".project-img button");

    zoomButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.stopPropagation();
            const img = btn.closest(".project-img").querySelector("img");
            openModal(img.src);
        });
    });

    function openModal(src) {
        modalImage.src = src;
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    closeBtn.addEventListener("click", closeModal);

    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });

    function closeModal() {
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }
})();
