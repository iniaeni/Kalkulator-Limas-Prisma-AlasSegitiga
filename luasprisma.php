<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Prisma</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body >
    <h1>Kalkulator Prisma</h1>
    <div class="box-container1">
        <div class="box">
            <h3><a href="index.html"><i class="material-icons">homepage</i></a><br>Luas Prisma Segitiga</h3><br>
           <form action="luasprisma.php" method="post" >
               <label for="">Tinggi Alas</label><br>
               <input class="texbox" type="number" name="tinggialas" placeholder="Masukan Nilai"><br>
               <label for="">Panjang Alas</label><br>
               <input class="texbox" type="number" name="panjangalas" placeholder="Masukan Nilai"><br>
               <label for="">Sisi Miring Alas</label><br>
               <input class="texbox" type="number" name="sisimiring" placeholder="Masukan Nilai"><br>
               <label for="">Tinggi Prisma </label><br>
               <input class="texbox" type="number" name="tinggiprisma" placeholder="Masukan Nilai"><br><br>
               <input class="texbox1" type="submit" name="hitung" value="Hitung"><br><br>
           </form>    

           <?php
                if(isset($_POST['hitung'])){
                $tinggialas=$_REQUEST['tinggialas'];
                $panjangalas=$_REQUEST['panjangalas'];
                $tinggiprisma=$_REQUEST['tinggiprisma'];
                $sisimiring=$_REQUEST['sisimiring'];
            
            //Rumus menghitung luas
                $luasalas = $tinggialas * $panjangalas /2;
                $kelilinga = $tinggialas + $panjangalas + $sisimiring;
                $luaspermukaan = (2 * $luasalas) + ($kelilinga * $tinggiprisma);

            //Hasil
                echo "Luas Permukaan = $luaspermukaan ";
                echo " cm2"; 
                echo "<br>";
                echo "Luas Alas = $luasalas";
                echo " cm2";
                }
                
            ?>
        </div>
    </div>
    
</body>
</html>
