<?php
namespace Cristo\People\Controllers;

use Cristo\People\Models\Person;

class PersonController {
  public function list() {
    $persons = Person::all();
    require('../src/views/person/list.php');

  }

  public function show($id) {
    $person = Person::find($id);
    if($person) {
      require('../src/views/person/show.php');
    }else{
      $this->list();
    }
    require('../src/views/person/show.php');
  }

  public function delete($id) {
    $person = Person::find($id);
    if ($person) {
      $person->delete();
    }
    $person->delete();
    $this->list();
  }
}