<?php 
  global $wpdb;
  $book_list = $wpdb->get_results("SELECT * FROM wp_books",ARRAY_A);
   $results = $wpdb->get_results( "SELECT * FROM wp_user_ip where `post_id` = 1 AND  `user_ip` ='".$_SERVER['REMOTE_ADDR']."' order by id desc",ARRAY_A)[0];
 ?>
<div class="container">
  <h2>Book List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Nane</th>
        <th>Author</th>
        <th>Post</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($book_list as $key => $value) { ?>
        <tr>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['author'] ?></td>
        <td><?php echo $value['about'] ?></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>
