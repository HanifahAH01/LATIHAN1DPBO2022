<?php
//============================================================//
//           Saya Hanifah Al Humaira mengerjakan              //
//         	   Latihan 1 dalam mata kuliah DPBO	    	      //
//	untuk keberkahanNya maka saya tidak melakukan kecurangan  //
//    	 seperti yang telah dispesifikasikan. Aamiin          //
//============================================================//

class daftarmahasiswa{

#nim, nama jenis kelamin, program studi, semester

    private $NIM = 0;
    private $nama = "";
    private $jkelamin ="";
    private $prodi ="";
    private $semester = 0;

    public function __construct($NIM=0, $nama="", $jkelamin="", $prodi="", $semester=0){
        $this->NIM=$NIM;
        $this->nama=$nama;
        $this->jkelamin=$jkelamin;
        $this->prodi=$prodi;
        $this->semester=$semester;
    }

    public function setNIM($NIM){
        $this->NIM=$NIM;
    }
    public function getNIM(){
        return $this->NIM;
    }

    public function setnama($nama){
        $this->nama=$nama;
    }
    public function getnama(){
        return $this->nama;
    }

    public function setjkelamin($jkelamin){
        $this->jkelamin=$jkelamin;
    }
    public function getjkelamin(){
        return $this->jkelamin;
    }

    public function setprodi($prodi){
        $this->prodi=$prodi;
    }
    public function getprodi(){
        return $this->prodi;
    }

    public function setsemester($semester){
        $this->semester=$semester;
    }
    public function getsemester(){
        return $this->semester;
    }
    function __destruct(){

    }
}

?>
