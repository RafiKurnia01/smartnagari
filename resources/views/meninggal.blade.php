<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Meninggal Dunia</title>
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
      select,
      textarea {
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
    <h1>Formulir Surat Keterangan Meninggal Dunia</h1>

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
          <th>Jenis Kelamin</th>
          <td>
            <select name="jenis_kelamin" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><input type="date" name="tanggal_lahir" required /></td>
        </tr>
        <tr>
          <th>Tempat Lahir</th>
          <td><input type="text" name="tempat_lahir" required /></td>
        </tr>
        <tr>
          <th>Tanggal Meninggal</th>
          <td><input type="date" name="tanggal_meninggal" required /></td>
        </tr>
        <tr>
          <th>Jam Meninggal</th>
          <td><input type="text" name="jam_meninggal" required /></td>
        </tr>
        <tr>
          <th>Tempat Meninggal</th>
          <td><input type="text" name="tempat_meninggal" required /></td>
        </tr>
        <tr>
          <th>Sebab Meninggal</th>
          <td>
            <textarea name="sebab_meninggal" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <th>Nama Pelapor</th>
          <td><input type="text" name="nama_pelapor" required /></td>
        </tr>
        <tr>
          <th>NIK Pelapor</th>
          <td><input type="text" name="nik_pelapor" required /></td>
        </tr>
        <tr>
          <th>Hubungan dengan Almarhum/Almarhumah</th>
          <td><input type="text" name="hubungan_pelapor" required /></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="Buat Surat" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
