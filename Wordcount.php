<?php 
// File : Wordcount.php
class Wordcount {  // Mendefinisikan sebuag class PHP dengan nama "WordCount"
    public function countWords($sentence) {  // Mendefinisikan metode publik "coundWords" dalam class "Wordcount". Metode ini menerima satu parameter, yaitu "$sentence", yang seharusnya berisi sebuah kalimat/teks
        return count(explode(" ",$sentence));  // Di dalam metode "countWords", kalimat input "$sentence" dipecah menjadi array menggunakan fungsi "explode()". Fungsi ini memisahkan string berdasarkan spasi dan menghasilkan array kata-kata. Setelah kalimat dipecah menjadi array kata-kata, fungsi "count()" digunakan untuk menghitung jumlah elemen dalam array, yang pada akhirnya akan menjadi jumlah kata dalam kalimat.
    }
}
?>