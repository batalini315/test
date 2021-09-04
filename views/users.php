<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Имя</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
      <th scope="col">Коментарий</th>
      <th scope="col">Отдел</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=1;
      foreach ($users as  $value) {
          echo(
              '<tr>
                <td>'.$i.'<td>
                <td>'.$value['email'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['address'].'</td>
                <td>'.$value['phone'].'</td>
                <td>'.$value['comment'].'</td>
                <td>'.$value['otdel'].'</td>
              </tr>');
              $i++;
      }
      ?>
    
  </tbody>
</table>