<?php
require '../vendor/autoload.php';
require '../src/utils/connection.php';

use Cristo\People\Controllers\PersonController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $table = isset($_GET['table']) ? $_GET['table'] : 'car';
  $action = isset($_GET['action']) ? $_GET['action'] : 'list';
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  $controller = null;
    switch ($table) {
      case 'car':
        $controller = new PersonController();
        break;
  }

  switch ($action) {
    case "list":
      $controller->list();
      break;
    case "show":
      $controller->show($id);
      break;
    case "delete":
      $controller->delete($id);
      break;
    case "create":
      $controller->create();
      break;
    case "post":
      $controller->post($_POST);
      break;
    case "edit":
      $controller->edit($id);
      break;
    case "update":
      $controller->update($id, $_POST);
      break;
  } 
?>
</body>
</html>