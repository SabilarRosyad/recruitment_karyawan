// Menangani klik tombol Show More
document.getElementById('show-more')?.addEventListener('click', function() {
    const nextUrl = this.getAttribute('data-next-url');

    // Mengambil data dari URL halaman berikutnya
    fetch(nextUrl)
        .then(response => response.text())
        .then(data => {
            // Temukan container untuk pekerjaan dan tambahkan pekerjaan baru
            const jobContainer = document.getElementById('job-container');
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const newJobs = doc.querySelector('#job-container').innerHTML;

            // Menambahkan pekerjaan baru ke container
            jobContainer.innerHTML += newJobs;

            // Periksa apakah ada tombol "Show More" baru di respons
            const showMoreButton = doc.querySelector('#show-more');
            if (!showMoreButton) {
                document.getElementById('show-more').style.display = 'none';
            } else {
                // Pasang event listener kembali jika tombol Show More ditemukan
                showMoreButton.addEventListener('click', function() {
                    // Handle show more again
                });
            }
        });
});
