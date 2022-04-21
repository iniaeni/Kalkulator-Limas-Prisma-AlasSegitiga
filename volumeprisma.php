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
            <h3><a href="index.html"><i class="material-icons">homepage</i></a><br>Volume Prisma Segitiga</h3><br>
           <form action="volumeprisma.php" method="post" >
               <label for="">Tinggi Alas</label><br>
               <input class="texbox" type="number" name="tinggialas" placeholder="Masukan Nilai"><br><br>
               <label for="">Panjang Alas</label><br>
               <input class="texbox" type="number" name="panjangalas" placeholder="Masukan Nilai"><br><br>
               <label for="">Tinggi Prisma </label><br>
               <input class="texbox" type="number" name="tinggiprisma" placeholder="Masukan Nilai"><br><br>
               <input class="texbox1" type="submit" name="hitung" value="Hitung"><br><br>
           </form>    

           <?php
                if(isset($_POST['hitung'])){
                $tinggia=$_REQUEST['tinggialas'];
                $panjanga=$_REQUEST['panjangalas'];
                $tinggip=$_REQUEST['tinggiprisma'];
            
            //Rumus menghitung volume
                $hasil = $tinggia * $panjanga /2 * $tinggip;

            //Hasil
                echo "<br>";
                echo "Volume = $hasil";
                echo " cm3";
                
                
                
                    
                }
                
            ?>
        </div>
    </div>
    
</body>
</html>
