<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Limas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body >
    <h1>Kalkulator Limas</h1>
    <div class="box-container1">
        <div class="box">
            <h3><a href="index.html"><i class="material-icons">homepage</i></a><br>Volume Limas Segitiga</h3><br>
           <form action="volumelimas.php" method="post" >
               <label for="">Panjang Alas</label><br>
               <input class="texbox" type="number" name="panjanga" placeholder="Masukan Nilai"><br><br>
               <label for="">Tinggi Alas</label><br>
               <input class="texbox" type="number" name="tinggia" placeholder="Masukan Nilai"><br><br>
               <label for="">Tinggi Limas </label><br>
               <input class="texbox" type="number" name="tinggiL" placeholder="Masukan Nilai"><br><br>
               <input class="texbox1" type="submit" name="hitung" value="Hitung"><br><br>
           </form> 
            <?php
                 if(isset($_POST['hitung'])){
                     $panjangalas = $_REQUEST ['panjanga'];
                     $tinggialas = $_REQUEST ['tinggia'];
                     $tinggilimas = $_REQUEST ['tinggiL'];

                    //Rumus menghitung Volume 
                    $luasalas = $panjangalas * $tinggialas / 2 ;
                    $volume = $luasalas * $tinggilimas / 3 ;

                    //hasil
                    echo "<br><br>";
                    echo "Volume = $volume";
                    echo " cm3";
                    
                    
                 }

            ?>
        </div>
</div>
</body>
</html>