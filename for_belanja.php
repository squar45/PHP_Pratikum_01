<?php
        $nama_customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == 'buku'){
            $total_belanja = 4200*$jumlah;
        }elseif($produk == 'pulpen'){
            $total_belanja = 2100*$jumlah;
        }else{
            $total_belanja = 2800*$jumlah;
        }
       
        echo '<br/>Nama Customer : '.$nama_customer;
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Produk : '.$jumlah;

        echo '<br/>Total Belanja : '.$total_belanja;
    ?>