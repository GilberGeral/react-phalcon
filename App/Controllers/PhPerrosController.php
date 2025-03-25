<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\PhPerros;

class PhPerrosController extends \Phalcon\Mvc\Controller {

  public function indexAction() {
  }

  public function listarAction() {
    $this->view->disable(); // Deshabilita la vista
    // error_log('algo jjjjuuu');
    $perros=[];
    $perros = $this->modelsManager->createBuilder()
    ->columns(['id_mask', 'nombre', 'raza', 'imagen'])
    ->from('PhPerros')
    ->getQuery()
    ->execute();
    echo json_encode($perros);
  }

}

