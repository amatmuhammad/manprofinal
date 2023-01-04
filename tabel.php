<!doctype html>
<?php 
include 'koneksi.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Data Kelas</title>
</head>
<body>

<div class="container">
    <h1 class="h1 text-center mb-5" style="margin-top:50px;">Data Kelas MIPA 2 Angkatan 2K17</h1>
        <div class="row">
            <div class="col">
                
                    <a href="olah.php" type="submit" class="btn btn-primary btn-lg mb-3" >Tambah (+)</a> 
    
            </div>
                <form action="olah.php" method="post">
                <table class="table table-hover table-bordered text-center align-middle" style="margin-topl: 20px ;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">UMUR</th>
                                <th scope="col">TAHUN MASUK</th>
                                <th scope="col">FOTO</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $query = "SELECT * FROM data";
                            $sql = mysqli_query($conn,$query) ;
                            $no=1;
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>  
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $data['nama'];?></td>
                                <td><?php echo $data['umur'];?></td>
                                <td><?php echo $data['tahun_masuk'];?></td>
                                <td><?php echo $data['foto'];?></td>
                                <td><a href="olah.php?edit=<?php echo $data['id']?>" type="submit" class="btn btn-warning" >Update</a>
                                <a href="proses.php?hapus=<?php echo $data['id']; ?>" type="submit" class="btn btn-danger" >Delete</a>
                                </td>
                            </tr>

                            <?php
                                $no++;
                            }
                            ?>
                            
                            
                        </tbody>
                    </table>
                </form> 
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>





