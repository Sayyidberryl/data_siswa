<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .pertama {
        width: 700px;
    }

    @media print{
        form {
            display: none;
        }
    }
</style>

<body>
    <div class="pertama container main d-flex flex-column justify-content-center align-items-center ">
        <p class="fs-5 text-center fw-bold mt-5">Data siswa</p>
        <form action="proces.php" method="post">
            <div class="nama d-flex">
                <label for="nama" class="container ">Nama</label>
                <input type="text" name="nama" class="container form-control" required>
            </div>
            <div class="nis d-flex mt-3">
                <label for="nis" class="container ">NIS</label>
                <input type="number" name="nis" class="container form-control" required>
            </div>
            <div class="rayon d-flex mt-3">
                <label for="rayon" class="container">Rayon</label>
                <input type="text" name="rayon" class="container form-control" required>
            </div>

            <div class=" container button d-flex justify-content-center mt-3">
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
                <button type="button " onclick="window.print()" class="btn btn-secondary ms-3 mx-3">Cetak</button>
                <button type="button" onclick="location.href='hapussemua.php'"
                    class="btn btn-danger">Hapus</button>
            </div>


        </form>
        <ul>
            <?php if (isset($_SESSION['siswa'])): ?>
                <?php foreach ($_SESSION['siswa'] as $key => $siswa): ?>
                    <li>
                        Nama : <?php echo $siswa['nama']; ?>
                        NIS : <?php echo $siswa['nis']; ?>
                        Rayon : <?php echo $siswa['rayon']; ?>
                        <a href="edit.php?key=<?php echo $key ?>">Edit</a>
                        <a href="hapus.php?key=<?php echo $key ?>">Hapus</a>
                        
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>


        </ul>
    </div>
</body>

</html>