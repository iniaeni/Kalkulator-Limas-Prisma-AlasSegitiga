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
            <h3><a href="index.html"><i class="material-icons">homepage</i></a><br>Luas Permukaan Limas</h3><br>
           <form action="luaslimas.php" method="post" >
               <label for="">Panjang Alas</label><br>
               <input class="texbox" type="number" name="panjanga" placeholder="Masukan Nilai"><br>
               <label for="">Tinggi Alas</label><br>
               <input class="texbox" type="number" name="tinggia" placeholder="Masukan Nilai"><br>
               <label for="">Sisi Miring Alas </label><br>
               <input class="texbox" type="number" name="sisimiring" placeholder="Masukan Nilai"><br>
               <label for="">Sisi Tegak </label><br>
               <input class="texbox" type="number" name="sisitegak" placeholder="Masukan Nilai"><br><br>
               <input class="texbox1" type="submit" name="hitung" value="Hitung"><br><br>
           </form> 
            <?php
                 if(isset($_POST['hitung'])){
                     $panjangalas = $_REQUEST ['panjanga'];
                     $tinggialas = $_REQUEST ['tinggia'];
                     $sisimiring = $_REQUEST ['sisimiring'];
                     $sisitegak = $_REQUEST ['sisitegak'];

                    //Rumus menghitung Luas permukaan
                    $luasalas = $panjangalas * $tinggialas / 2 ;
                    $LuasP = $luasalas + (($panjangalas*$sisitegak/2)+($tinggialas*$sisitegak/2)+($sisimiring*$sisitegak/2));

                    //hasil 
                    echo "Luas Permukaan= $LuasP ";
                    echo " cm2"; 
                    echo " <br><br>";
                    echo "Luas Alas= $luasalas";
                 }

            ?>
        </div>
</div>
</body>
</html>