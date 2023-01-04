<?php
 include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Formulir</title>
  </head>
  <body style="background-color:#2596be ;">
       
                <form action="proses.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="container">
                    <div class="row content d-flex justify-content-center ">
                        <div class="col-md-6 " style="margin-top: 70px; ">
                            <div class="box shadow bg-white p-3 " style="border-radius: 20px;">
                              <h1 class="mb-4 text-center" style="font-weight:600 ;">Formulir Data</h1>
                              <div class="mb-3">
                                <label  class="form-label">Username</label>
                                <input type="text" class="form-control"  placeholder="Masukan Nama" value="<?php echo $nama;?>">
                            </div>
                            <div class="mb-4">
                                <label  class="form-label">Umur</label>
                                <input type="" class="form-control" placeholder="Masukan Umur value="<?php echo $umur;?>">
                            </div>
                            <div class="mb-4">
                            <label  class="form-label">Tahun Masuk</label>
                                <select name="Tahun" id="Tahun" class="form-control">
                                    <option value="pilih" type="unlink">Pilih Tahun</option>
                                    <option value="pilih">Tahun 2017</option>
                                    <option value="pilih">Tahun 2018</option>
                                    <option value="pilih">Tahun 2019</option>
                                    <option value="pilih">Tahun 2020</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label  class="form-label">Foto</label>
                                <input type="file" class="form-control" placeholder="Masukan Umur">
                            </div>
                                <div class="mb-3  text-center">
                                    <?php
                                            if (isset($_GET['edit'])) {
                                                echo "<button type='button'  name='btnedit' class='btn btn-outline-success' >Simpan</button>";
                                            }else {
                                                echo "<button type='button'  name = 'btnmasuk' class='btn btn-outline-success' >Tambahkan data</button>";
                                            }                    
                                
                                    ?>
                                            <a href="tabel.php" ><button type="button" class="btn masuk btn-outline-danger">Kembali</button></a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </form>
           
        

    </body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
