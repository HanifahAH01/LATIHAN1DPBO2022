<?php

//============================================================//
//           Saya Hanifah Al Humaira mengerjakan              //
//         	   Latihan 1 dalam mata kuliah DPBO	    	      //
//	untuk keberkahanNya maka saya tidak melakukan kecurangan  //
//    	 seperti yang telah dispesifikasikan. Aamiin          //
//============================================================//

include "daftarmahasiswa.php";

$mahasiswa1 = new daftarmahasiswa();
$mahasiswa1->setNIM(2000152);
$mahasiswa1->setnama("Hanifah Al Humaira");
$mahasiswa1->setjkelamin("Perempuan");
$mahasiswa1->setprodi("Ilmu Komputer");
$mahasiswa1->setsemester(4);

$mahasiswa2 = new daftarmahasiswa (2003721, "Alvin Giovani", "Laki-Laki", "Ilmu Komputer", 4);

$mahasiswa3 = new daftarmahasiswa (2000352, "Axel Eldrian", "Laki-Laki", "Ilmu Komputer", 4);

echo "Mahasiswa 1". "<br>";
echo "NIM               : " . $mahasiswa1->getNIM() . "<br>";
echo "Nama              : " . $mahasiswa1->getnama() . "<br>";
echo "Jenis Kelamin     : " . $mahasiswa1->getjkelamin() . "<br>";
echo "Program Studi     : " . $mahasiswa1->getprodi() . "<br>";
echo "Semester          : " . $mahasiswa1->getsemester() . "<br>";

echo "<br>";

echo "Mahasiswa 2". "<br>";
echo "NIM               : " . $mahasiswa2->getNIM() . "<br>";
echo "Nama              : " . $mahasiswa2->getnama() . "<br>";
echo "Jenis Kelamin     : " . $mahasiswa2->getjkelamin() . "<br>";
echo "Program Studi     : " . $mahasiswa2->getprodi() . "<br>";
echo "Semester          : " . $mahasiswa2->getsemester() . "<br>";

echo "<br>";

echo "Mahasiswa 2". "<br>";
echo "NIM               : " . $mahasiswa3->getNIM() . "<br>";
echo "Nama              : " . $mahasiswa3->getnama() . "<br>";
echo "Jenis Kelamin     : " . $mahasiswa3->getjkelamin() . "<br>";
echo "Program Studi     : " . $mahasiswa3->getprodi() . "<br>";
echo "Semester          : " . $mahasiswa3->getsemester() . "<br>";

?>