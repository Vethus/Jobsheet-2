<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jam Masuk Sekolah</title>
</head>
<body>

    <h2>Form Jam Masuk Sekolah</h2>

    <form id="jamMasukForm">
        <label for="namaSiswa">Nama Siswa:</label>
        <input type="text" id="namaSiswa" required>

        <label for="jamMasuk">Jam Masuk (HH:mm):</label>
        <input type="text" id="jamMasuk" placeholder="Contoh: 07:30" required>

        <button type="button" onclick="cekJamMasuk()">Cek Jam Masuk</button>
    </form>

    <div id="hasil"></div>

    <script>
        function cekJamMasuk() {
            var namaSiswa = document.getElementById('namaSiswa').value;
            var jamMasuk = document.getElementById('jamMasuk').value;

            // Validasi format jam masuk
            var regex = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
            if (regex.test(jamMasuk)) {
                var hasil = document.getElementById('hasil');
                hasil.innerHTML = "<p>Data diterima.</p>";
                hasil.innerHTML += "<p>Nama siswa: " + namaSiswa + "</p>";
                hasil.innerHTML += "<p>Jam masuk: " + jamMasuk + "</p>";

                // Menentukan status telat
                if (jamMasuk <= "07:00") {
                    hasil.innerHTML += "<p>Selamat datang di sekolah, " + namaSiswa + ". Anda tidak dianggap telat.</p>";
                } else {
                    hasil.innerHTML += "<p>Maaf, " + namaSiswa + ". Anda dianggap telat, segera masuk kelas!</p>";
                }
            } else {
                alert("Format jam masuk tidak valid. Pastikan mengikuti format HH:mm.");
            }
        }
    </script>

</body>
</html>