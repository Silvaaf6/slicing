<html>

<head>
    <style>
        .flair {
            width: 100px;
            height: 100px;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            background-color: rgba(0, 0, 0, 0.5);
            /* Tambahkan agar elemen terlihat */
        }
    </style>
</head>

<body>
    <div class="flair flair--3"></div>

    <!-- GSAP Core -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <!-- Tidak perlu plugin tambahan kecuali jika dibutuhkan -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Pengaturan awal untuk elemen .flair
            gsap.set(".flair", {
                xPercent: -50,
                yPercent: -50
            });

            // Fungsi untuk mengubah posisi elemen .flair berdasarkan gerakan mouse
            let xTo = gsap.quickTo(".flair", "x", {
                    duration: 0.6,
                    ease: "power3"
                }),
                yTo = gsap.quickTo(".flair", "y", {
                    duration: 0.6,
                    ease: "power3"
                });

            // Event listener untuk menggerakkan elemen .flair mengikuti kursor
            window.addEventListener("mousemove", e => {
                xTo(e.clientX); // Mengatur posisi X elemen .flair
                yTo(e.clientY); // Mengatur posisi Y elemen .flair
            });
        });
    </script>
</body>

</html>
