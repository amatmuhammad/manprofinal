<?php
include  'koneksi.php';

if (isset($POST['btnmasuk'])){
    $query="INSERT INTO data VALUES('','$nama')";
    $sql=mysqli_query($konek,$query);
    if($sql){
        header('location:index.php');
    }
}