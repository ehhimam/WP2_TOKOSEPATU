<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Input Data Pembeli!</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5"> Form Pembelian Sepatu!</h1>
        <form method="post" action="<?php echo base_url(); ?>index.php/Tokosepatu/save">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap ...">
            </div>

            <div class="form-group">
                <label for="nama">No HP</label>
                <input type="text" id="nama" name="nohp" class="form-control" placeholder="Masukkan No HP ...">
            </div>

            <div class="form-group">
                <label for="merek">Merek Sepatu</label>
                <select id="merek" name="merek" class="form-control">
                    <option value="">- Pilih Merek Sepatu</option>
                    <option value="Nike">Nike -Rp375.000</option>
                    <option value="Adidas">Adidas -Rp300.000</option>
                    <option value="Kickers">Kickers -Rp250.000</option>
                    <option value="Eiger">Eiger -Rp275.000</option>
                    <option value="Eiger">Bucherri -Rp400.000</option>
                </select>
            </div>

            <div class="form-group">
                <label for="size">Size Sepatu</label>
                <select id="size" name="size" class="form-control">
                    <option value="">- Pilih Size Sepatu</option>
                    <?php

                    for ($i = 32; $i < 45; $i++) {
                        echo " <option value='$i'>$i</option>";
                    }

                    ?>

                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <audio autoplay="true">
            <source src="<?= base_url('music/idol.mp3'); ?>" type="audio/mpeg">
        </audio>

        <div class="img" style="position:fixed;right:0px;bottom:-5px;z-index-1">
            <img id="grillImg" style="height: 200px;" alt="cute grill" src="https://catbox.moe/pictures/qts/1512276789957.png">
        </div>

        <div class="img" style="position:fixed;left:0px;bottom:-5px;z-index-1">
            <img id="grillImg" style="height: 200px;;" alt="cute grill" src="https://catbox.moe/pictures/qts/1428707759205.png">
        </div>

        <div class="img" style="position:fixed;bottom:0px;bottom:-5px;z-index-1">
            <p class="text-center">By: Imam Faturrahman</p>
        </div>




    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>