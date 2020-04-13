/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
  class ObjectTracker {
    private static $nextSerial = 0;
    private $id;
    private $name;

    function __construct($name) {
      $this->name = $name;
      $this->id = ++self::$nextSerial;
    }

    function __clone() {
      $this->name = 'Clone of ' . $this->name;
      $this->id = ++self::$nextSerial;
    }

    function getId() {
      return $this->id;
    }

    function getName() {
      return $this->name;
    }

    function setName($name) {
      $this->name = $name;
    }
  }

  $ot = new ObjectTracker('Zeev\'s object');
  $ot2 = new ObjectTracker('Another object');
  $ot3 = $ot;

  print $ot->getId() . ' ' . $ot->getName() . '<br>';
  print $ot2->getId() . ' ' . $ot2->getName() . '<br>';
  print $ot3->getId() . ' ' . $ot3->getName() . '<br>';

?>