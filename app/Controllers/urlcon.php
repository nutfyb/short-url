<?php

namespace App\Controllers;

use App\Models\urlmodel;
use CodeIgniter\Controller;
use Exception;
use App\Libraries\qrcode;

class urlcon extends Controller
{
    /**
     * Instance of the main Request object added to prevent the
     * PHP Intelephense VS Code plug-in from falsely reporting
     * IncomingRequest class errors.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;
    var $temp;
    public function index()
    {
        $urlmodel = new urlmodel();
        $get_url = $this->findurl();
        if ($get_url != false) {
            $numbcount = (int)$get_url[1];
            $numbcount += 1;
            $urlmodel->set(['urlcount' => $numbcount]);
            $urlmodel->where('short_url', $get_url[2]);
            $urlmodel->update();
            var_dump($get_url[2]);
            return redirect()->to($get_url[0]);
        }
        echo view('template/header');
        echo view('urlpage');
        echo view('template/footer');
    }
    public function result()
    {
        $urlmodel = new urlmodel();
        $get_url = $this->findurl();
        $uri = service('uri');
        $a = $uri->getQuery();
        $b = explode("=", $a);
        $c = $get_url[1];
        $d = $get_url[0];
        // print_r($d) ;
        $data['urls'] = "http://localhost:8080/?query={$b[1]}";
        $data['urlscount'] = $c;
        $data['fullurl'] = $d;

        echo view('template/header');
        echo view('result_page', $data);
        echo view('template/footer');
    }

    public function findurl()
    {
        $db = db_connect();
        $urlmodel = new urlmodel();
        $uri = service('uri');
        try {
            $a = $uri->getQuery();
            $b = explode("=", $a);
            $result = $urlmodel->wheres($b[1]);
            $get_url[0] = $result[0]->full_url;
            $get_url[1] = $result[0]->urlcount;
            $get_url[2] = $result[0]->short_url;
            return $get_url;
        } catch (Exception $e) {

            return false;
        }
    }

    public function shorten_url()
    {
        // $session = session();
        $urlmodel = new urlmodel();
        $shorturl = '';
        for ($i = 0; $i < 4; $i++) {
            $number = random_int(0, 36);
            $character = base_convert($number, 10, 36);
            $shorturl .= $character;
        }
        $data = [
            'full_url' => $this->request->getVar('url'),
            'short_url' => $shorturl,
            'urlcount' => "0",
        ];
        $urlmodel->insert($data);
        $urlarray["shorturl"] = $shorturl;
        return $this->response->redirect(site_url("/result_page/?a={$shorturl}"));
    }

    public function urlhistory()
    {
        $urlmodel = new urlmodel();
        $data['history'] = $urlmodel->orderBy('id','DESC')->findAll();
        echo view('template/header');
        echo view('history',$data);
        echo view('template/footer');
    }

    // public function qrcodeGenerate()
    // {
    //     $this->qrCode = new qrcode();
    //     $this->barcode = new BarcodeGenerator();
    //     //QRcode
    //     $this->qrCode
    //         ->setText('Tegar Penemuan')
    //         ->setSize(300)
    //         ->setPadding(10)
    //         ->setErrorCorrection('high')
    //         ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    //         ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    //         ->setLabel('Tegar Penemuan')
    //         ->setLabelFontSize(16)
    //         ->setImageType(QrCode::IMAGE_TYPE_PNG);
    //     $qrcode = $this->qrCode->generate();


    //     //Barcode
    //     $this->barcode->setText("0123456789");
    //     $this->barcode->setType(BarcodeGenerator::Code128);
    //     $this->barcode->setScale(3);
    //     $this->barcode->setThickness(25);
    //     $this->barcode->setFontSize(10);
    //     $code = $this->barcode->generate();

    //     $barcode = $code;

    //     $data = [
    //         'qrcode' => $qrcode,
    //         'barcode' => $barcode,
    //         'title' => 'Home QRcode dan Barcode'
    //     ];

    //     return view('welcome_message', $data);
    // }
}
