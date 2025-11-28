// Bootstrap 5 handles the carousel automatically via data attributes.
// We only need custom JS if we want specific behavior not covered by data attributes.

document.addEventListener('DOMContentLoaded', function () {
    // Initialize carousels if needed, though data-bs-ride="carousel" usually suffices.
    var carousels = document.querySelectorAll('.carousel');
    carousels.forEach(function (carousel) {
        new bootstrap.Carousel(carousel, {
            interval: 5000, // Slower speed (5 seconds)
            wrap: true
        });
    });
});

function switchToEnglish() {
    window.location.href = "../public/indexen.php";
}