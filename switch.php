<?php
$nilai = "b";

switch ($nilai){
    case "A":
    case "a":
        echo "Anda lulus dengan sangat baik";
        break;
    case "B"||"b":
    case "C":
    case "c":
        echo "Anda lulus";
        break;
    case "D":
        echo "anda tidak lulus";
        break;
    default:
        echo "anda salah masukan nilai";
}

// coba tampilkan jika 1 = januari, 2 = februari ... 12 = desember 

$bulan = 5;

switch($bulan){
    case "1";
    echo "januari";
    break;
    case "2";
    echo "februari";
    break;
    case "3";
    echo "maret";
    break;
    case "4";
    echo "april";
    break;
    case "12";
    echo "desember";
    break;
    default :
    echo "salah masukan angka";
}

for ($a = 1; $a <= 10; $a++){
    echo "ini adalah putaran ke - $a <br>";
}

for ($b = 1; $b <=100; $b+=2){ //b=b+2
    echo $b." ";
}
echo "<br>";
for ($c = 100; $c >= 0; $c-=2){
    echo $c."  ";
}
echo "<br>";
// for {1 + 2 + 3 ... 10 = ....}
for ($d=1;$d<10;$d++){
    $sum+=$d;
    echo $d."+";
}
    $sum+=$d;
    echo $d++;
    echo "= $sum <br>";
// for tampilkan bilangan 1 - 100, 
// jika bilangan habis dibagi 3 maka tampilkan bizz 
// jika habis dibagi 5 tampilkan buzz 
// jika habis dibagi 3 dan 5 tampilkan bizz buzz
// for ($i=1;$i<=100;$i++){
//     if ($i%5 == 0 and $i%3 ==0){
//         echo "bizz buzz <br>";
//     }elseif ($i%5 == 0){
//         echo "buzz <br>";
//     }elseif ($i%3 == 0 ){
//         echo "bizz <br>";
//     }else{
//         echo $i."<br>";
//     }
// }


$names = ["dewi","sandra","ahmnad"];
echo "<table border='1'>";
echo "<tr>";
echo "<th> nama </th>";
echo "</tr>";
foreach ($names as $nama){
    echo "<tr><td> $nama </td></tr>";
}
echo "</table>";
//tabel yang isinya 
// no, nama, alamat , gender 
// isi 5 nama teman kalian memakai foreach dan array -> key
$profiles = [[
    "No" => "1",
    "Nama" => "Ali",
    "Alamat" => "Depok",
    "gender" => "Pria"
],[
    "No" => "2",
    "Nama" => "Aldo",
    "Alamat" => "Depok",
    "gender" => "Pria"
],
[
    "No" => "3",
    "Nama" => "Asih",
    "Alamat" => "Depok",
    "gender" => "Wanita"
]
];
echo "<table border='1'>";
echo "<tr>";
echo "<th>NO </th><th>Nama</th><th>Alamat</th><th>Gender</th>";
echo "</tr>";
foreach ($profiles as $profile){
    echo "<tr>";
    echo "<td>". $profile['No'] ."</td>";
    echo "<td>".$profile['Nama']."</td>";
    echo "<td>".$profile['Alamat']."</td>";
    echo "<td>".$profile['gender']."</td>";
    echo "</tr>";
}
echo "</table>";
// card (berita) yang isinya 
// judul, sub judul dan description
// isinya 4 berita