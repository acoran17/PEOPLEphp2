<h1>Gentes</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
<?php
  foreach($persons::all() as $person) {
?>
      <tr>
        
        <td>
          <a href="index.php?action=show&id=<?=$person->id?>">
        </td>
        <td><?=$person->name?></td>
          </a>
          <a href="index.php?action=edit&id=<?=$person->id?>">
        <td>&#128393;</td>

      </tr>
<?php
  }
?>
    </tbody>
  </table>