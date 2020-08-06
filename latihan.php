<?php

///////////// BAB 1
// class Mobil 
// {
//     public $merk = 'Toyota';
//     public $tipe = 'Forutner';
//     public $tahun = 2010;
//     public $warna =  'Hejo';

//     public function maju()
//     {
//         echo 'weeeet...weeet...weeettt...';
//     }
// }

// $mobil = new Mobil();
// $mobil->merk = 'Honda';
// $mobil->tipe = 'Angkot';
// $mobil->tahun = '1998';

// echo "Mobil: $mobil->merk Tipe: $mobil->tipe Tahun: $mobil->tahun \n";

// $mobil->maju();

// echo "\n";
// echo "\n";
// echo "\n";

// $mobil2 = new Mobil();
// $mobil2->merk;
// $mobil2->tipe;
// $mobil2->tahun;


// echo "Mobil: $mobil2->merk Tipe: $mobil2->tipe Tahun: $mobil2->tahun \n";

// $mobil2->maju();

///////////// BAB 2
// class Mobil 
// {
//     public $merk = 'BMW';
    
//     public function sebutMerk()
//     {
//        return $this->lowercase($this->merk);
//     }

//     public function lowercase($text)
//     {
//         return strtolower($text);
//     }
// }

// $mobil = new Mobil();
// echo $mobil->sebutMerk();



///////////// BAB 3
// class Mobil
// {
//     public $tangki = 0;
//     // public $tangki2 = 0;

//     public function isiBensin($liter)
//     {
//         $this->tangki += $liter;
//         // $this->tangki2 += $liter;
//         return $this;
//     }

//     public function kendarai($jarak)
//     {
//         $terpakai = $jarak / 20;

//         $this->tangki -= $terpakai;

//         return $this;
//     }

// }


// $mobil = new Mobil();


// $sisaBensin = $mobil->isiBensin(2)->kendarai(20)->tangki;

// echo "Sisa bensin = ".$sisaBensin." liter \n";

// // var_dumP($mobil->isiBensin(5));




///////////// BAB 4
// class Mobil
// {
//     public $merk = '';

//     public function __construct($merk = 'Tidak diisi')
//     {
//         $this->merk = $merk;
//     }

//     public function getMerk()
//     {
//         return 'Merk mobil adalah '. $this->merk .' dari class '. __CLASS__;
//     }
// }



// $mobil = new Mobil();

// echo $mobil->getMerk();


///////////// BAB 5

class MobilJepang
{
    private $merk;

    public function setMerk($merk)
    {
        $merkJepang = ['Honda', 'Suzuki', 'Toyota', 'Nissan'];
        if(!in_array($merk, $merkJepang)){

            return  $this->merk = 'Bukan mobil Jepang';;
        }

        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function maju()
    {
        $maju = $this->injakKopling();
        $maju .= $this->ubahPerseneling();
        $maju .= $this->injakGas();
        $maju .= 'weeettt....weeeeeet....wwweeeeeeeet';

        echo $maju;
    }

    private function injakKopling()
    {
        echo "injak kopling \n";
    }
    private function ubahPerseneling()
    {
        echo "ubah perseneling \n";
    }
    private function injakGas()
    {
        echo "injak Gas \n";
    }
}

$mobil = new MobilJepang();


try {
    $mobil->setMerk('Suzuki');
    
    
    echo "Merk Mobil : ". $mobil->getMerk() ."\n";
    $mobil->maju();

} catch (\Error $e) {
    echo 'error uy : '.$e->getMessage();
}




