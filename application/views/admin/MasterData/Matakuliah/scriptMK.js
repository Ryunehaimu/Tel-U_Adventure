document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#saveDataBtn').addEventListener('click', function() {
        let noSurat = document.querySelector('#noSurat').value;
        let tanggal = document.querySelector('#tanggal').value;
        let mataKuliah = document.querySelector('#mataKuliah').value;
        let kodeDosen = document.querySelector('#kodeDosen').value;
        let kodeKelas = document.querySelector('#kodeKelas').value;

        let table = document.querySelector('tbody');
        let newRow = table.insertRow();

        newRow.insertCell(0).innerText = noSurat;
        newRow.insertCell(1).innerText = tanggal;
        newRow.insertCell(2).innerText = mataKuliah;
        newRow.insertCell(3).innerText = kodeDosen;
        newRow.insertCell(4).innerText = kodeKelas;

        let actionCell = newRow.insertCell(5);
        actionCell.innerHTML = '<button title="Edit" class="btn btn-primary mr-2" data-toggle="modal" data-target="#editDataModal">Edit</button>' +
                               '<button title="Search" class="btn btn-success mr-2">Cari</button>' +
                               '<button title="Delete" class="btn btn-danger delete-button">Hapus</button>';

        document.querySelector('#addDataForm').reset();
        $('#addDataModal').modal('hide');

        // Event listener for the new "Edit" button
        const newEditButton = newRow.querySelector('.btn-primary[data-target="#editDataModal"]');
        addEditListener(newEditButton);
        bindDeleteButtons(); // Rebind the delete function after adding a new row
    });

    const editButtons = document.querySelectorAll('.btn-primary[data-target="#editDataModal"]');
    editButtons.forEach(addEditListener);

    function addEditListener(button) {
        button.addEventListener('click', function(event) {
            const row = event.target.closest('tr'); 
            const cells = row.cells;
            row.classList.add('editing-row');

            document.getElementById('editNoSurat').value = cells[0].innerText;
            document.getElementById('editTanggal').value = cells[1].innerText;
            document.getElementById('editMataKuliah').value = cells[2].innerText;
            document.getElementById('editKodeDosen').value = cells[3].innerText;
            document.getElementById('editKodeKelas').value = cells[4].innerText;
        });
    }

    const updateButton = document.getElementById('updateDataBtn');
    updateButton.addEventListener('click', function() {
        const currentRow = document.querySelector('.editing-row');
        if (currentRow) {
            currentRow.cells[0].innerText = document.getElementById('editNoSurat').value;
            currentRow.cells[1].innerText = document.getElementById('editTanggal').value;
            currentRow.cells[2].innerText = document.getElementById('editMataKuliah').value;
            currentRow.cells[3].innerText = document.getElementById('editKodeDosen').value;
            currentRow.cells[4].innerText = document.getElementById('editKodeKelas').value;
            currentRow.classList.remove('editing-row');
        }
    });

    // DELETE BARIS
    function deleteRow(row) {
        const rowIndex = row.parentNode.parentNode.rowIndex; // Get the row index
        document.querySelector('tbody').deleteRow(rowIndex); // Delete the row from the table
    }

    // DELETE BUTTON
    function bindDeleteButtons() {
        const deleteButtons = document.querySelectorAll('.delete-button');

        for (const button of deleteButtons) {
            button.addEventListener('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus Mata Kuliah ini?')) {
                    deleteRow(this);
                }
            });
        }
    }

    bindDeleteButtons();

});
