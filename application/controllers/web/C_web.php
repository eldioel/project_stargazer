<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function welcomePage()
    {
        $data['contoh'] = '';
        render('landing_page/V_home', 'home', $data);
    }

    public function aboutPage()
    {
        # code...
        $data['contoh'] = '';
        render('landing_page/V_about', 'home', $data);
    }

    public function productPage()
    {
        # code...
        $data['contoh'] = '';
        render('landing_page/V_product', 'home', $data);
    }

    public function storePage()
    {
        # code...
        $data['contoh'] = '';
        render('landing_page/V_store', 'home', $data);
    }
}
