<?php 
    namespace App\Controllers;

    use App\Models\MPersegiPanjang;

    class Persegipanjang extends BaseController
    {
        public function index()
        {
            return view('PersegiPanjang/form_persegi_panjang');
        }

        public function hasil()
        {
            $model = new MPersegiPanjang();
            $model->lebar = $this->request->getPost('txt_lebar');
            $model->panjang = $this->request->getPost('txt_panjang');

            return view(
                'PersegiPanjang/hasil',
                [
                    'persegiPanjang' => $model
                ]
            );
        }
    }
    
?>