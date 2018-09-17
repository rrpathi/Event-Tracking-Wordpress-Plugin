
<?php 
  $args = array(
    'author'        =>  $current_user->ID, // I could also use $user_ID, right?
    'orderby'       =>  'post_date',
    'order'         =>  'DESC' 
    );
$current_user_posts = get_posts( $args );
 ?>
<div class="container">
  <h2>Post List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Post Title</th>
        <th>Posted Date</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($current_user_posts as $key => $value) { ?>
        <tr>
        <td><?php echo $value->post_title ?></td>
        <td><?php echo $value->post_date ?></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>
