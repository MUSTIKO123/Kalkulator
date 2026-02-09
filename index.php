<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            kalkulator sederhana
        </title>
    </head>
    <body>
        <form action="" method="post">
            Angka 1 <input type="text" name="Angka1">
            <br>
            Angka 2 <input type="text " name="Angka2">
            <br>   
            Operator <select name="Operator" >
            <option value="+">+</option>
              <option value="-">-</option>
                <option value="/">/</option>
              <option value="*">x</option>

                        </select>  
                        <button type="submit" name="eksekusi">=</button>
           </form>
           <?php

            if(isset($_POST['eksekusi'])) {
            $Angka1 = $_POST['Angka1'];
             $Angka2 = $_POST['Angka2'];
              $Operator = $_POST['Operator'];
              $_hasil = 0;
              
               if ($Operator == "+") {
                $hasil =$Angka1 + $Angka2 ;
              }
               else if ($Operator == "-") {
                $hasil =$Angka1 - $Angka2 ;
              }
              else if ($Operator == "/") {
                $hasil =$Angka1 / $Angka2 ;
              }
             else if ($Operator == "*") {
                $hasil =$Angka1 * $Angka2 ;
              }
              
           echo "<br>";
           echo "$Angka1 $Operator $Angka2 <br>";
           echo "=$hasil";
           } ?>
    </body>
</html>