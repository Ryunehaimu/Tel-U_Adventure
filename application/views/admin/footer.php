    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= base_url('application/style/script.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
        // Initialize DataTable with pagination
        new DataTable('#example', {
            paging: true,
            lengthMenu: [2, 5, 10], // Set the number of rows per page options
            pageLength: 2, // Set the default number of rows per page
            searching: true,
            ordering: true,
            info: true,
            responsive: true
        });

        // Handle logout button click
        document.querySelector("a[href*='Welcome']").addEventListener("click", function(e) {
            e.preventDefault();

            // Show the logout modal
            const modal = document.getElementById('logoutModal');
            modal.showModal();

            // Handle click on the "Yes" button
            document.getElementById('logoutYes').addEventListener('click', function() {
                window.location.href = '<?=base_url("admin/logout")?>';
            });

            // Handle click on the "No" button
            document.getElementById('logoutNo').addEventListener('click', function() {
                modal.close(); // Close the modal
            });
        });
    </script>

</body>
<footer style="border-top: 1px gray;margin-top:50px;">
    <center>
        <p>Copyright ©2023 All Rights Reserved By Ade Ade</p>
    </center>
</footer>

</html>