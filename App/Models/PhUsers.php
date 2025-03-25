<?php



class PhUsers extends \Phalcon\Mvc\Model {

  /**
   *
   * @var integer
   */
  public $idUser;

  /**
   *
   * @var string
   */
  public $nombre;

  /**
   *
   * @var string
   */
  public $email;

  /**
   *
   * @var integer
   */
  public $edad;

  /**
   *
   * @var string
   */
  public $created_at;

  /**
   *
   * @var string
   */
  public $updated_at;

  /**
   *
   * @var string
   */
  public $created_by;

  /**
   *
   * @var string
   */
  public $updated_by;

  /**
   * Initialize method for model.
   */
  public function initialize() {
    $this->setSchema("test_kubo");
    $this->setSource("ph_users");
  }

  /**
   * Allows to query a set of records that match the specified conditions
   *
   * @param mixed $parameters
   * @return PhUsers[]|PhUsers|\Phalcon\Mvc\Model\ResultSetInterface
   */
  public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface {
    return parent::find($parameters);
  }

  /**
   * Allows to query the first record that match the specified conditions
   *
   * @param mixed $parameters
   * @return PhUsers|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
   */
  public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface {
    return parent::findFirst($parameters);
  }
}
