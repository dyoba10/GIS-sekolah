<?php 

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sekolah_model");
        $this->load->model('Map_model', '', TRUE);
        $this->load->library('Googlemaps');
    }

    public function index() 
    {
        
        $config['center'] = '-5.384667,105.243197';//Coordinate tengah peta
        $config['zoom'] = '12';
        $config['sensor'] = TRUE;
        $config['https'] = FALSE;
        $this->googlemaps->initialize($config);
        
        $coords = $this->Map_model->get_coordinates();

        foreach ($coords as $coordinate) {
            $url = prep_url($coordinate->website);
            $url1 = base_url('upload/sekolah/'.$coordinate->gambar);
            $marker = array();
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = 'Nama sekolah : ' .$coordinate->nama_sekolah.'<br>'.'Deskripsi : ' .$coordinate->deskripsi.'<br>'.'Alamat : '.$coordinate->alamat.'<br>'.'Kontak : '.$coordinate->kontak.'<br>'.'Website : '.'<a href="'.$url.'" target="_blank">'.$coordinate->website.'<a/>'.'<br>'.'<img src="'.$url1.'" width="100">';
            $this->googlemaps->add_marker($marker);
        }
         
        $data= array();
        $data['map'] = $this->googlemaps->create_map();
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $this->load->view('home/index', $data);
    }

}