<?php 
    namespace App\Models;

use CodeIgniter\Model;

    class MPersegiPanjang extends Model
    {
        public $panjang;
        public $lebar;

        public function hitungKeliling()
        {
            return 2*($this->panjang + $this->lebar);
        }
    }
?>