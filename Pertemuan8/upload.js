//  Praktikum 3. Upload  File dengan PHP dan Jquery 
//  Praktikum 4. Menghias Upload File  
// Ketika halaman sudah dimuat sepenuhnya
$(document).ready(function () {
    // Ketika pengguna memilih file
    $('#file').change(function(){
        // Memeriksa apakah pengguna sudah memilih file
        if (this.files.length > 0){
            // Mengaktifkan tombol unggah jika ada file yang dipilih
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            // Menonaktifkan tombol unggah jika tidak ada file yang dipilih
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Ketika formulir di-submit
    $("#upload-form").submit(function (e) {
        e.preventDefault(); // Mencegah pengiriman formulir secara biasa

        // Mengumpulkan data formulir
        var formData = new FormData(this);

        // Mengirim data ke server menggunakan AJAX
        $.ajax({
            url: "upload_ajax.php", // Alamat di server untuk menerima data
            type: "POST", // Metode pengiriman data
            data: formData, // Data yang akan dikirim
            cache: false, // Menonaktifkan cache
            contentType: false, // Menentukan tipe konten sebagai false untuk FormData
            processData: false, // Menonaktifkan pemrosesan data
            success: function (response) {
                // Menampilkan pesan respons dari server di halaman
                $("#status").html(response);
            },
            error: function(){
                // Menampilkan pesan kesalahan jika terjadi masalah saat mengunggah
                $("#status").html("Terjadi kesalahan saat mengunggah file.");
            }
        });
    });
});
