let deleteId = null;

function showDeleteModal(id) {
  deleteId = id; // Simpan ID yang akan dihapus
  const modal = document.getElementById('deleteModal');
  modal.classList.remove('hidden'); // Tampilkan modal
  modal.style.display = 'flex'; // Pastikan modal diatur ke 'flex' saat ditampilkan
}

function closeDeleteModal() {
  const modal = document.getElementById('deleteModal');
  modal.classList.add('hidden'); // Sembunyikan modal
  modal.style.display = 'none'; // Pastikan modal tidak terlihat saat disembunyikan
  deleteId = null; // Reset ID
}

function confirmDelete() {
  if (deleteId) {
    // Ambil URL saat ini untuk menentukan halaman yang sedang aktif
    const currentUrl = window.location.pathname;

    // Tentukan URL penghapusan berdasarkan halaman yang aktif
    if (currentUrl.includes('admin')) {
      window.location.href = `/admin/hapus/${deleteId}`; // Arahkan ke penghapusan admin
    } else if (currentUrl.includes('user')) {
      window.location.href = `/user/hapus/${deleteId}`; // Arahkan ke penghapusan user
    } else if (currentUrl.includes('job')) {
      window.location.href = `/job/hapus/${deleteId}`; // Arahkan ke penghapusan job
    } else if (currentUrl.includes('application')) {
      window.location.href = `/application/hapus/${deleteId}`; // Arahkan ke penghapusan application
    } else if (currentUrl.includes('interviews')) {
      window.location.href = `/interviews/hapus/${deleteId}`; // Arahkan ke penghapusan interviews
    }
    // Tambahkan lebih banyak kondisi jika diperlukan untuk halaman lainnya
  }
}
