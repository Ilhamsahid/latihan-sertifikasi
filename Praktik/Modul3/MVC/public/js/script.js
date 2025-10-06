$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data Mahasiswa');
    });

    $(document).on('click', '[data-bs-dismiss="modal"]', function () {
        console.log('Modal ditutup melalui tombol close.');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data Mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost/BELAJAR_PHP/MVC/public/mahasiswa/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/BELAJAR_PHP/MVC/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });
});