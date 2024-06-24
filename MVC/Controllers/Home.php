<?php
class Home extends controller
{
    public $dulieu;
    function __construct()
    {
        $this->dulieu = $this->model('khuchoi_m');

        ##comment
    }
    function Get_data()
    {
        $this->view('Masterlayout', [
            'page' => 'home',
            "dulieu" => $this->dulieu->laydulieu()
        ]);
    }
}
