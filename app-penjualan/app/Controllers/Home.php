<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data =[
            'title'=>'Aplikasi Penjualan Aksesoris Komputer',
            'descriptions'=>'Web ini untuk transaksi penjualan aksesoris komputer',
            'author'=> '2022101009 - Bagas Aditya Silalahi'
        ];
        return view('v_login/login', $data);
    }
}
