<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Surat Keterangan Menikah</title>
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
    <h1>Formulir Surat Keterangan Menikah</h1>

    <form action="#">
      <table>
        <tr>
          <th colspan="2">Data Suami</th>
        </tr>
        <tr>
          <th>Nama Lengkap Suami</th>
          <td><input type="text" name="nama_suami" required /></td>
        </tr>
        <tr>
          <th>NIK Suami</th>
          <td><input type="text" name="nik_suami" required /></td>
        </tr>
        <tr>
          <th>Tempat Lahir Suami</th>
          <td><input type="text" name="tempat_lahir_suami" required /></td>
        </tr>
        <tr>
          <th>Tanggal Lahir Suami</th>
          <td><input type="date" name="tanggal_lahir_suami" required /></td>
        </tr>
        <tr>
          <th>Jenis Kelamin Suami</th>
          <td>
            <select name="jenis_kelamin_suami" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Alamat Suami</th>
          <td><textarea name="alamat_suami" rows="3" required></textarea></td>
        </tr>
        <tr>
          <th>Agama Suami</th>
          <td><input type="text" name="agama_suami" required /></td>
        </tr>
        <tr>
          <th>Pekerjaan Suami</th>
          <td><input type="text" name="pekerjaan_suami" required /></td>
        </tr>
        <!-- Memberikan ruang antara data suami dan istri -->
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <th colspan="2">Data Istri</th>
        </tr>
        <tr>
          <th>Nama Lengkap Istri</th>
          <td><input type="text" name="nama_istri" required /></td>
        </tr>
        <tr>
          <th>NIK Istri</th>
          <td><input type="text" name="nik_istri" required /></td>
        </tr>
        <tr>
          <th>Tempat Lahir Istri</th>
          <td><input type="text" name="tempat_lahir_istri" required /></td>
        </tr>
        <tr>
          <th>Tanggal Lahir Istri</th>
          <td><input type="date" name="tanggal_lahir_istri" required /></td>
        </tr>
        <tr>
          <th>Jenis Kelamin Istri</th>
          <td>
            <select name="jenis_kelamin_istri" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Alamat Istri</th>
          <td><textarea name="alamat_istri" rows="3" required></textarea></td>
        </tr>
        <tr>
          <th>Agama Istri</th>
          <td><input type="text" name="agama_istri" required /></td>
        </tr>
        <tr>
          <th>Pekerjaan Istri</th>
          <td><input type="text" name="pekerjaan_istri" required /></td>
        </tr>
      </table>

      <input type="submit" value="Buat Surat" />
    </form>
  </body>
</html>
