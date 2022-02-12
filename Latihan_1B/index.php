<?php

    include "daftartim.php";

    $daftartim1 = new daftartim();
    $daftartim1->setNamaTim("Semen Padang");
    $daftartim1->setNegaraAsal("Indonesia");
    $daftartim1->setTahun(1980);
    $daftartim1->setPemain("1. Feri Sistianto, 
                            2. Muhammad Fahri, 
                            3. Rudi,
                            4. Mario Aibekob, 
                            5.  Aldino Herdianto,
                            6. Vendry Mofu, 
                            7. Vivi Asrizal, 
                            8. Tegar Dadi Prakoso,
                            9. Sunarto, 
                            10. Ricky Ohorella, 
                            11. Manda Cingi,
                            11. Rendy Oscario, 
                            12. Aulia Hidayat, 
                            13. Iqbal Bachtiar");

    $daftartim2 = new daftartim("Chelsea", "Inggris", 1905, "1. Kepa Arrizabalaga, 
                            2. Antonio Rüdiger, 
                            3. Marcos Alonso,
                            4. Andreas Christensen, 
                            5. Jorginho,
                            6. Thiago Silva, 
                            7. N'Golo Kanté, 
                            8. 	Mateo Kovačić,
                            9. 	Romelu Lukaku, 
                            10. Christian Pulisic, 
                            11. Timo Werner,
                            11. Ruben Loftus-Cheek, 
                            12. Marcus Bettinelli" );
    
    echo "Daftar Tim Sepak Bola" . "<br>";
    echo "<br>";
    echo "Nama Tim      : ". $daftartim1->getNamaTim() . "<br>";
    echo "Negara Asal   : ". $daftartim1->getNegaraAsal() . "<br>";
    echo "Tahun Berdiri : ". $daftartim1->getTahun() . "<br>";
    echo "Pemain        : ". $daftartim1->getPemain() . "<br>";
    
    echo "<br>";

    echo "Nama Tim      : ". $daftartim2->getNamaTim() . "<br>";
    echo "Negara Asal   : ". $daftartim2->getNegaraAsal() . "<br>";
    echo "Tahun Berdiri : ". $daftartim2->getTahun() . "<br>";
    echo "Pemain        : ". $daftartim2->getPemain() . "<br>";

?>