<h2>Список сотрудников</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Имя</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
      <th scope="col">Коментарий</th>
      <th scope="col">Отдел</th>
      <th scope="col">Обновить</th>
      <th scope="col">Удалить</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
      foreach ($users as  $value) {
          echo(
              '<tr>
                <td>'.$value['email'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['address'].'</td>
                <td>'.$value['phone'].'</td>
                <td>'.$value['comment'].'</td>
                <td>'.$value['otdel'].'</td>
                <td> <a class="navbar-brand" href="/upuser/'.$value['id'].'">Обновить</a></td>
                <td> <a class="navbar-brand" href="/deluser/'.$value['id'].'">Удалить</a></td>
              </tr>');
              $i++;
      }
      ?>
    
  </tbody>
</table>