<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Penghasilan</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
      }

      h1 {
        text-align: center;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th,
      td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
      }

      input[type="text"],
      select {
        width: 100%;
        padding: 6px;
        margin-top: 8px;
        border: 1px solid #ddd;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <h1>Formulir Surat Keterangan Penghasilan</h1>

    <form action="#">
      <table>
        <tr>
          <th>Nama Lengkap</th>
          <td><input type="text" name="nama_lengkap" required /></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td><input type="text" name="nik" required /></td>
        </tr>
        <tr>
          <th>Jabatan</th>
          <td><input type="text" name="jabatan" required /></td>
        </tr>
        <tr>
          <th>Nama Perusahaan</th>
          <td><input type="text" name="nama_perusahaan" required /></td>
        </tr>
        <tr>
          <th>Alamat Perusahaan</th>
          <td>
            <textarea name="alamat_perusahaan" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <th>Gaji Pokok</th>
          <td><input type="number" name="gaji_pokok" required /></td>
        </tr>
        <tr>
          <th>Tunjangan</th>
          <td><input type="number" name="tunjangan" required /></td>
        </tr>
        <tr>
          <th>Penghasilan Tambahan</th>
          <td><input type="number" name="penghasilan_tambahan" /></td>
        </tr>
        <tr>
          <th>Total Penghasilan</th>
          <td><input type="number" name="total_penghasilan" readonly /></td>
        </tr>
        <tr>
          <th>Tujuan Penggunaan</th>
          <td>
            <textarea name="tujuan_penggunaan" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="Buat Surat" /></td>
        </tr>
      </table>
    </form>

    <script>
      var gajiPokokInput = document.getElementById("gaji_pokok");
      var tunjanganInput = document.getElementById("tunjangan");
      var penghasilanTambahanInput = document.getElementById(
        "penghasilan_tambahan"
      );
      var totalPenghasilanInput = document.getElementById("total_penghasilan");

      gajiPokokInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      tunjanganInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      penghasilanTambahanInput.addEventListener("input", function () {
        updateTotalPenghasilan();
      });

      function updateTotalPenghasilan() {
        var gajiPokok = parseFloat(gajiPokokInput.value) || 0;
        var tunjangan = parseFloat(tunjanganInput.value) || 0;
        var penghasilanTambahan =
          parseFloat(penghasilanTambahanInput.value) || 0;

        var totalPenghasilan = gajiPokok + tunjangan + penghasilanTambahan;
        totalPenghasilanInput.value = totalPenghasilan.toFixed(2);
      }
    </script>
  </body>
</html>
