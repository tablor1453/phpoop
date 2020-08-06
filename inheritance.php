<?php 

// Parent Class
class Mobil 
{
    protected $merk;

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function halo()
    {
        return 'Tin tin ...hallo bro, mobil ini merknya '.$this->merk;
    }

    final public function mesin()
    {
        return "Mesin Bensin \n";
    }

}

// Child Class

class MobilSport extends Mobil
{
    // protected $merk = 'Jahaj';

    public function halo()
    {
        return 'Brot==ktnt ...hallo bro, mobil ini merknya '.$this->merk;
    }
}

$mobilSport =  new MobilSport();
$mobilSport->setMerk('Lamarbini');

// echo $mobilSport->halo();
echo $mobilSport->mesin();

class MobilListrik extends Mobil
{
    public function mesin()
    {
        return "Mobil Elektrik \n";
    }
}

$mobilListrik =  new MobilListrik();
echo $mobilListrik->mesin();




