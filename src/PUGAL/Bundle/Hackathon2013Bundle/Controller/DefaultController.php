<?php

namespace PUGAL\Bundle\Hackathon2013Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Http\Client;
use PUGAL\Bundle\Hackathon2013Bundle\Entity\Row;

class DefaultController extends Controller {
  public function indexAction() {
    /*$tmpFile = tempnam(sys_get_temp_dir(), 'guzzle-download');
    $handle = fopen($tmpFile, 'w');
    $client = new Client('', array(
      Client::CURL_OPTIONS => array(
        'CURLOPT_RETURNTRANSFER' => TRUE,
        'CURLOPT_FILE' => $handle
      )
    ));

    $client->get('http://194.116.110.109:8080/CONSU2011VDB/CONSU2011_view/json//CONSU2011')->send();
    fclose($handle);*/

    //$contents = file_get_contents($tmpFile);
    $contents = file_get_contents('/private/var/folders/fj/fh06ngp97xj4sdv9h1c023ph0000gn/T/guzzle-downloadzJqSdy');
    $json = json_decode(utf8_encode($contents), TRUE);

    $em = $this->getDoctrine()->getManager();

    foreach ($json['all_CONSU2011']['CONSU2011'] as $row_element) {
      $row = new Row();
      foreach ($row_element as $key => $element) {
        $setter = "set{$key}";
        $setter = str_replace('_', '', $setter);
        $row->$setter($element);
      }
      $em->persist($row);
      $em->flush();
    }

    return $this->render('PUGALHackathon2013Bundle:Default:index.html.twig');
  }
}
