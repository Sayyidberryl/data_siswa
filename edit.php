<?php
session_start();

if (isset($_GET['key'])) {
    $key = $_GET['key'];
    if (isset($_SESSION['siswa'][$key])) {
        $siswa = $_SESSION['siswa'][$key];
    } else {
        echo "Siswa tidak ditemukan!";
        exit();
    }
} else {
    echo "Parameter tidak valid!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Siswa</title>
</head>
<style>
    .semua{
        width: 500px;
    }
</style>
<body>
    <div class="semua container main d-flex flex-column justify-content-center align-items-center ">
    <p class="fs-5 text-center fw-bold mt-5">Edit data</p>
        <form method="post" action="process_edit.php">
            <div class="nama  d-flex mt-3">
                <input type="hidden" name="key" value="<?php echo $key; ?>">
                <label for="nama" class="container ">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama']; ?>" class="container form-control" required>
            </div>
            <div class="nis  d-flex mt-3">

                <label for="nis" class="container " >NIS:</label>
                <input type="text" name="nis" id="nis" value="<?php echo $siswa['nis']; ?>"  class="container form-control"required>
            </div>

            <div class="rayon  d-flex mt-3">
                <label for="kelas" class="container ">Rayon:</label>
                <input type="text" name="rayon" id="rayon" value="<?php echo $siswa['rayon']; ?>" class="container form-control" required>
            </div>


            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>

</html>