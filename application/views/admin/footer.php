<script>
    // Tangani klik pada tombol Logout
    document.querySelector("a[href*='Welcome']").addEventListener("click", function(e) {
        e.preventDefault();
        // Tampilkan modal konfirmasi
        const modal = document.getElementById('logoutModal');
        modal.showModal();

        // Tangani klik pada tombol Iya
        document.getElementById('logoutYes').addEventListener('click', function() {
            window.location.href = '<?=base_url("Welcome")?>';
        });

        // Tangani klik pada tombol Tidak
        document.getElementById('logoutNo').addEventListener('click', function() {
            modal.close(); // Tutup modal
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= base_url('application/style/script.js') ?>"></script>
</body>
<footer style="border-top: 1px gray;margin-top:50px;">
    <center>
        <p>Copyright ©2023 All Rights Reserved By Ade Ade</p>
    </center>
</footer>

</html>