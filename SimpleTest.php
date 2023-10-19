<?php
    //path untuk menjalankan test pada terminal
    // ./vendor/bit/phpunit --bootstrap vendor/autoload.php (SimpleTsest.php) <- dapat menyesusaikan dengan penamaan file
    use PHPUnit\Framework\TestCase;

    // class yang mau di test.
    require_once "Wordcount.php";

    //Class untuk run Testting. dengan mewarisi class TestCase pada phpunit
    class SimpleTest extends TestCase
    {
        public function testCountWords()
        {
            //use this for test
            $Wc = new WordCount();

            //dimasukkan 5 kata dan outputnya harus bernilai 5
            $TestSentence = "kimi no namae wa Vito";//5 kata dengan spasi sebagi jarak tiap kalimat
            $WordCount = $Wc->countWords($TestSentence);

            //$this sebagai pemanggil objek dari unit class yang dijalankan
            //assertEquals method yang digunakan untuk membadingkan dua nilai
            $this->assertEquals(5, $WordCount);
        }
    }