<?php

echo "Soal Latihan Logic <br>";

//varibel soal 1
$km = 7;
$m = 1000;
$konversi = $km * $m;

//variabel soal 2
$tahun = 2;
$bulan  = 12;
$sisabulan = 3;
$berapa = (($tahun * $bulan) + $sisabulan);

//variabel soal 3

$mangga = 1470;
$keranjang = 42;
$hargamangga = 1150;
$sekeranjang = ($mangga / $keranjang * $hargamangga);

//variabel soal 4
$beras = 113.5;
$gula = 4.6;
$cabe = 1.75;
$ikan = 2.5;
$berat = $beras + $gula + $cabe + $ikan;

//variabel soal 5
$jarakab = 240;
$jama = 16.00;
$istirahat = 00.30;
$kecrat = 60;
$lama = $jarakab/$kecrat;
$jamtib = $jama + $lama + $istirahat;

//variabel soal 6
$tongsatu = 12;
$tongdua = 15;
$tongtiga = 20;
$isiember = 9;
$semuaisi = ($tongsatu*$isiember)+($tongdua*$isiember)+($tongtiga*$isiember);

//variabel soal 7
$P = 16;
$L = 8;
$K = 2 * ($P * $L);

//variabel soal 8
$ml = 2500;
$hm = 0.01 ;
$konhml = $ml * $hm;

//variabel soal 9
$kg = 200;
$kwintal = 100;
$quin = $kg / $kwintal;

//variabel soal 10
$mtr = 1;
$cmr = 100;
$sisacmtr = 30;
$haskonv = ((1 * 100)+30);

//variabel soal 11
$kotakap = 12;
$buahap = 24;
$kotakturn = 5;
$jumap = ((12 - 5) * 24);

//variabel soal 12
$alwan = 40;
$arman = 42;
$bilantara = ($alwan + $arman) / 2;

//variabel soal 13
$modala = 6500000;
$untungsatu = 3500000;
$rugi = 1500000;
$balikmodal = ($modala- ($untungsatu- $rugi));

//variabel soal 14
$untungpers = 0.15;
$ntungnomi = 21000;
$seratuspers = 1;
$ntungrent = $seratuspers - $untungpers;
$ntungsisa = 0.9 - $ntungrent;
$ntungsisanomi = $ntungsisa / $ntungnomi;

$hargajual = (($ntungnomi * 6) + $ntungsisanomi);

//variabel soal 15

$array = [93, 156, 86, 200, 205];
$sortiran = sort($array);

//variabel soal 16
$hari = 14;
$sisahari = 7;
$minggu = 7;
$pengumpulan = ($hari/$minggu) + ($sisahari/$minggu);

//variabel soal 17
$pditivi = 14;
$tditivi = 4;
$trealm = 1;
$satuancm = 100;
$trealcm = $trealm * $satuancm;
$sktreal = $trealcm / $tditivi;
$prealcm = $sktreal * $pditivi;
$haskonvm = $prealcm / $satuancm;

//variabel soal 18
$skala = 2500000;
$kotakpt = ((22 * 20) * $skala );
$kilokecm = 100000;
$kotakreal = $kotakpt / $kilokecm;


//variabel soal 19
$bacasatu = 110;
$bacadua = 94;
$bacatiga = 127;
$halamansemua = $bacasatu + $bacadua + $bacatiga;

//variabel soal 20
$penumpangs = 365;
$penumpangp = 400;
$semuapenumpang = 365 + 400;

//variabel soal 21
$diskemejaawal = 10;
$diskemejaakhir = 30;
$hargabayar = 126000;
$hargafterdisawal = 100 - $diskemejaawal;
$hargafterdisakhir = 100 - $diskemejaakhir;
$hargabeforediskahir = 100 / $hargafterdisakhir * $hargabayar;
$hargareal = 100 / $hargafterdisawal * $hargabeforediskahir; 


//variabel soal 22
$lebarkol = 28;
$luaskolam = 980;
$panjangkolam = $luaskolam / $lebarkol;

//variabel soal 23
$pinjam = 20000000;
$bunga = 0.075;
$hargajualbrg = 22500000;
$belioleh = 30500;
$parkir = 2000;
$uangkontan = ($hargajualbrg + $belioleh + $parkir) - ($pinjam + $pinjam * $bunga);

//variabel soal 24
$ukurandin = 850 * 600;
$pembagikemeter = 10;
$hargapengecatan = $ukurandin / $pembagikemeter * 4250;

//variabel soal 25
$pinjamkoperasi = 2000000;
$bulanpinjam = 15;
$setahunsebulan = 12;
$bayarsemuanya = 2245000;
$bungasemua = $bayarsemuanya - $pinjamkoperasi;
$bungaperbulan = $bungasemua/$bulanpinjam;
$bungapertahun = $bungaperbulan * $setahunsebulan;
$persentasebunga = $pinjamkoperasi / $bungapertahun; 

//variabel soal 1
$hitungkata = "Halo, nama saya John Doe";

//variabel soal 2
$urutandata = [1,2,3,7,2];

//variabel soal 3
$urutanterkecil = [3,1,5,2,4];
$prosesurut = sort($urutanterkecil);

//variabel soal 4
$hurufseringkluar = ("hello world!");
$prosesstrcount = count_chars("$hurufseringkluar",1);
$maks_count = 0;
$frekuensiplingtinggi = ''; 
foreach ($prosesstrcount as $char => $count)
{
    if ($count > $maks_count && ctype_alpha(chr($char))){
        $maks_count = $count;
        $frekuensiplingtinggi = chr($char);
    }
}

//variabel soal 5
function is_palindrome($string){
    $cleaned_string = strtolower(preg_replace("/[^-Za-z0-9]/", '', $string));
    return $cleaned_string == strrev($cleaned_string);
}
$kata_palindrome = "level";
$hasil_palindrome = '';
if (is_palindrome($kata_palindrome)) {
   $hasil_palindrome = "'$kata_palindrome' adalah palindrom.";
} else {
   $hasil_palindrome = "'$kata_palindrome' bukan palindrom.";
}


echo "Jawaban Soal Pertama       : $konversi Meter <br>" ;
echo "Jawaban Soal Kedua         : $berapa Bulan <br>" ;
echo "Jawaban Soal Ketiga        : Rp. $sekeranjang <br>" ;
echo "Jawaban Soal Empat         : $berat Kg <br>" ;
echo "Jawaban Soal Lima          : $jamtib 0 Wib <br>" ;
echo "Jawaban Soal Enam          : $semuaisi Liter <br>" ;
echo "Jawaban Soal Tujuh         : $K Meter <br>" ;
echo "Jawaban Soal Delapan       : $konhml Hm <br>" ;
echo "Jawaban Soal Sembilan      : $quin Kwintal <br>" ;
echo "Jawaban Soal Sepuluh       : $haskonv CentiMeter <br>" ;
echo "Jawaban Soal Sebelas       : $jumap Apel <br>" ;
echo "Jawaban Soal Duabelas      : $bilantara <br>" ;
echo "Jawaban Soal Tigabelas     : Rp. $balikmodal Lagi <br>" ;
echo "Jawaban Soal Empatbelas    : Rp. $hargajual <br>" ;
echo "Jawaban Soal Limabelas     :" ; echo implode(", ",$array);
echo "<br>";
echo "Jawaban Soal Enambelas     : $pengumpulan Minggu <br>" ;
echo "Jawaban Soal Tujuhbelas    : $prealcm Cm atau $haskonvm M <br>" ;
echo "Jawaban Soal delapanbelas  : $kotakreal km2 <br>" ;
echo "Jawaban Soal sembilanbelas : $halamansemua Halaman <br>" ;
echo "Jawaban Soal duapuluh      : $semuapenumpang  Orang<br>" ;
echo "Jawaban Soal duapuluhsatu  : Rp. $hargareal <br>";
echo "Jawaban Soal duapuluhdua   :  $panjangkolam Cm <br>";
echo "Jawaban Soal duapuluhtiga  : Rp. $uangkontan <br>" ;
echo "Jawaban Soal duapuluhempat : Rp. $hargapengecatan <br>" ;
echo "Jawaban Soal duapuluhlima  : $persentasebunga % <br>" ;

echo "<hr><hr>"; 
echo " <h1 align='center' >logic test intervie web programmer</h1> <hr><hr>";

echo "Jawaban Soal satu      :".str_word_count($hitungkata);
echo "<br>";
echo "Jawaban Soal dua  :".max($urutandata);
echo "<br>";
echo "Jawaban Soal tiga   :" ;echo implode(", ",$urutanterkecil);
echo "<br>";
echo "Jawaban Soal empat  : $frekuensiplingtinggi dengan $maks_count <br>" ;
echo "Jawaban Soal lima :$hasil_palindrome <br>" ;

?>