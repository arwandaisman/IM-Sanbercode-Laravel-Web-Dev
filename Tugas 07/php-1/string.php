<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        $string = "PHP is never old";
        $panjangString = strlen($string);
        $jumlahKata = str_word_count($string);

        echo "String : $string <br>";
        echo "Panjang string : $panjangString <br>";
        echo "Panjang Kata : $jumlahKata<br> <br>";

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $panjangString2 = strlen($first_sentence);
        $jumlahKata2 = str_word_count($first_sentence);

        echo "String : $first_sentence <br>";
        echo "Panjang string : $panjangString2 <br>";
        echo "Panjang Kata : $jumlahKata2<br> <br>";

        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        $panjangString3 = strlen($second_sentence);
        $jumlahKata3 = str_word_count($second_sentence);

        echo "String : $second_sentence <br>";
        echo "Panjang string : $panjangString3 <br>";
        echo "Panjang Kata : $jumlahKata3<br>";
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 1, 5) ;
        echo "<br> Kata Ketiga: ". substr($string2, 7, 9) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy! ";
        echo "String: \"$string3\" <br>"; 
        // OUTPUT : "PHP is old but awesome"

        $ubahString3 = str_replace("sexy!", "awesome", $string3);
        echo "Output: \"$ubahString3\" "; 

    ?>
</body>
</html>
 