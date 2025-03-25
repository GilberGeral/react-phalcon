<?php
declare(strict_types=1);

namespace App\Controllers;

class PhUsersController extends \Phalcon\Mvc\Controller {

  public function indexAction() {
    echo "Bienvenido a PhUsers!";
  }

  public function registrarAction() {
    // echo "Registro de usuarios";
    $this->view->pick('ph_users/registrar');
  }

}