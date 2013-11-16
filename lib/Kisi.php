<?php


/**
 * Description of Kisi
 *
 * @author Student
 */
class Kisi {

    public $isim;
    public $soyisim;
    public $dogumTarihi; //sadece yil
    public $BaslangicYili;
    public function getUzunIsim(){
        return $this->isim .' '.$this->soyisim;
    }
    public function getYas(){
        return date('Y')- $this->dogumTarihi;
    }
    
}
