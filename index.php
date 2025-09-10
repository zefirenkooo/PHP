<?php
echo "<html><head>";
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo "<title>инфа</title>";
echo "</head>";
echo "<body>";
echo "<h1>Этот скрипт не писали  
</h1>";
echo "</body>";
echo "</html>";

$dom="МКАГ";
$otdelenie = "ИСИП";
$yrok= "УП 14.01";
$kabinet= "402";
$prepodovatel= "Карташова Юлия Сергеевна";
$group="4-23";
$name="Юрлов Александр Гергиевич";
$text="Название образовательного учреждения: $dom <br>
Отделение: $otdelenie <br>
Предмет: $yrok <br>
Кабинет: $kabinet <br>
Преподаватель: $prepodovatel <br>
Номер группы: $group <br>
ФИО студента: $name ";
echo $text; 

echo "<h1>Задание 1 </h1>";
$x=10;
$y=5;
$sum=$x+$y;
$raz=$x-$y;
$pro=$x*$y;
$cha=$x/$y;
echo "сложение ".$sum. " "; 
echo " вычитание ".$raz." ";
echo " умножение ".$pro." ";
echo " деление " .$cha." ";

echo "<h1>Задание 2 </h1>";
 $a =(3+27+6);
 $b = (4+9+6);
 $z=pow($a,$b);
echo "$z <br>"; 
echo "число a= $a<br>" ;
echo "число b= $b<br>";

echo "<h1>Задание 3 </h1>";
$l = 5; 
$b = $l * 2; 
echo "Число a: $l<br>";
echo "Число b (a*2): $b<br>";
echo "<br>";
$z = 666/3;
$v = $z + 1;
echo "Число z: $z<br>";
echo "Число v (z+1): $v<br>";
echo "<br>";
$s = (1/4) * pow($a,2)*sqrt(3);
$a=9;
echo "Площадь=$s";
echo "<br>";
echo "<br>"; 
$Q = 66;
$O = 77;
$M =  88;
$MIN = min ($Q, $O, $M);
$MAX = max( $Q, $O, $M);
echo "минмальное"," " .$MIN." ", "максимальое" , " "  .$MAX." "; 


echo "<h1>Тема 2</h1>";
echo "<h1>Задание 1</h1>";
echo "<tr><th>Число</th><th>Квадрат</th></tr>";
for ($x = 4; $x <=9; $x++){
    $x2 =$x * $x;
    echo "<table border='1'><tr><td>$x</td><td>$x2</td></tr></table>";
};






echo "<h1>Задание 2</h1>";
echo "<table border='1'; color=red>";
echo "<tr><th></th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";
for ($x = 4; $x <= 9; $x++) {
    echo "<tr><td>$x</td>";
    for ($y = 1; $y <= 10; $y++) {
        $result = $x * $y;
        $style = ($result % 2 == 0) ? "background-color: gray;" : "";
        if ($result < 40) {
            $style .= "color: green;";
        } elseif ($result > 75) {
            $style .= "color: red; font-weight: bold;";
        }
        echo "<td style='$style'>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h1>Тема 2</h1>";
echo "<h1>Задание 3.1: Сравнение двух чисел</h1>";
$num1 = 15;
$num2 = 10;
echo "<p>Первое число: $num1</p>";
echo "<p>Второе число: $num2</p>";
if ($num1 > $num2) {
    echo "<p style='color: blue;'>Большее число: $num1</p>";
} elseif ($num2 > $num1) {
    echo "<p style='color: blue;'>Большее число: $num2</p>";
} else {
    echo "<p style='color: blue;'>Числа равны: $num1 = $num2</p>";
}

?>
