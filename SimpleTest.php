<?php  
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php 
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;  // Menggunakan TestCase class dari PHPUnit, yang menyediakan metode asert untuk menguji aplikasi

// Class yang mau di TEST.
require_once "Wordcount.php";  // Mengimport class "Wordcount.php" yang akan di uji

// Class untuk run Testing.
class SimpleTest extends TestCase {  // Mendefinisikan kelas uji yang merupakan subkelas dari "TestCase". Metode uji dimulai dengan 'test' dan diikuti oleh nama fungsi atau metode yang akan di uji
    public function testCountWords() {  // Metode uji "testCoundWord" yang akan menguji fungsi "coundWords" dari class "WordCound"
        // Kita pakai class yang mau kita test.
        $Wc = new Wordcount();  // Membuat objek dari class "WordCount" yang akan diuji

        // Kita masukkan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Arya"; // 4 kata  // Membuat contoh kalimat dengan 4 kata yang akan digunakan sebagai input untuk menguji "coundWords" method
        $WordCount = $Wc->countWords($TestSentence);  // Memanggil "coundWords" method dari objek "Wordcound" dan menyimpan hasilnya dalam variabel "$WordCount"
        
        // Kita assert equal, ekspetasinya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals(4, $WordCount);  // Menggunakan asertion "assertEquals" untuk membandingkan hasil dari "coundWord" method dengan nilai yang diharapkan (4). Jika nilai yang dikembalikan oleh "CountWord" method sama dengan (4), maka pengujian dianggap berhasil
    }
}
?>