<?
///mengenal array pada php
        //membuat dan memanggil data pada array secara biasa\
            //membuat array yang berisi nama buah-buahan
                $buah = array('semangka','jeruk','apel','anggur');
            //menampilkan data array dengan nomor urut 2
                echo $buah[2];
        
    ///membuat dan memberi penamaan pada isi array
        //penamaan isi array
            $buah['semangka'] = "isinya merah";
            $buah['jeruk'] = "rasanya manis";
            $buah['apel'] = "warnanya merah";
            $buah['anggur'] = "harganya mahal";
        // menampilkan isi array yang bernama jeruk
            echo $buah['jeruk'];
        
        //penamaan isi array variabel buah menggunakan syntax
            $buah = array(
                'semangka' => "isinya merah",
                'jeruk' => "rasanya manis",
                'apel' => "warnanya merah",
                'anggur' => "harganya mahal"
            );
        // menampilkan isi array yang bernama jeruk
            echo $buah['jeruk'];

///Contoh menerapkan array dengan for
    //membuat array yang berisi nama buah-buahan
         $buah = array('semangka','jeruk','apel','anggur');
    //count() untuk menghitung isi array.
        for($x=0;$x<count($buah);$x++){
	    echo $buah[$x]."<br/>";
    }

?>