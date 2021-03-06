<?php namespace App\Controllers;

use App\Models\M_kategori;
use App\Models\M_menu;

class Homepage extends BaseController
{
	public function index()
	{
        $db = \Config\Database::connect();
        $cart = \Config\Services::cart();

        $model = new M_kategori;
        $model2 = new M_menu;
        
        $query = $db->query("SELECT * FROM tblidentitas");
        $row = $query->getRowArray();

        $kategori = $model->findAll();
        $menu = $model2->findAll();
		$data = [
            'cart' => $cart,
            'kategori' => $kategori,
            'menu' => $menu,
            'identitas' => $row
        ];
        echo view('home/homepage',$data);
    }

    public function option()
    {
        $model = new M_kategori();
        $kategori = $model->findAll();
        $data = [
                'kategori' => $kategori,
            ];
        return view('template/option', $data);
    }

	//--------------------------------------------------------------------

}