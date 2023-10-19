<?php
    //file : WordCount.php
    class WordCount
    {
        //$sentence : parameter untuk menghitung jumlah kalimat
        public function countWords($sentence)
        {//count menghitung jumlah elemen pada array
         //explode memecahkan string menjadi array berdasar delimiter 
         //atau spasi pada studi kasus kali ini 
            return count(explode(" ",$sentence));
        }
    }
?>