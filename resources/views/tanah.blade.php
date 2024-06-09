<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Kepemilikan Tanah</title>
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
      input[type="number"],
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
    <h1>Formulir Surat Keterangan Kepemilikan Tanah</h1>

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
          <th>Alamat</th>
          <td><textarea name="alamat" rows="3" required></textarea></td>
        </tr>
        <tr>
          <th>Nomor Sertifikat</th>
          <td><input type="text" name="nomor_sertifikat" required /></td>
        </tr>
        <tr>
          <th>Letak Tanah</th>
          <td><textarea name="letak_tanah" rows="3" required></textarea></td>
        </tr>
        <tr>
          <th>Luas Tanah (m²)</th>
          <td><input type="number" name="luas_tanah" required /></td>
        </tr>
        <tr>
          <th>Batas-Batas Tanah</th>
          <td>
            <textarea name="batas_tanah" rows="3" required></textarea>
          </td>
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
  </body>
</html>
