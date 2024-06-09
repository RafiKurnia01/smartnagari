<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pindah Domisili</title>
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
    <h1>Formulir Pindah Domisili</h1>

    <form action="#">
      <table>
        <tr>
          <th>Nomor Kartu Keluarga (KK)</th>
          <td><input type="text" name="no_kk" required /></td>
        </tr>
        <tr>
          <th>Nama Lengkap</th>
          <td><input type="text" name="nama_lengkap" required /></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td><input type="text" name="nik" required /></td>
        </tr>
        <tr>
          <th>Alamat Sekarang</th>
          <td>
            <textarea name="alamat_sekarang" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <th>Alamat Pindah</th>
          <td>
            <textarea name="alamat_pindah" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <th>Alasan Pindah</th>
          <td>
            <select name="alasan_pindah" required>
              <option value="">Pilih Alasan Pindah</option>
              <option value="Pekerjaan">Pekerjaan</option>
              <option value="Pendidikan">Pendidikan</option>
              <option value="Kesehatan">Kesehatan</option>
              <option value="Perumahan">Perumahan</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Tanggal Pindah</th>
          <td><input type="date" name="tanggal_pindah" required /></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="Buat Surat" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
