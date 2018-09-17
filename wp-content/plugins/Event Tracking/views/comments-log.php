<?php 
 $args = array(
  'post_id' => $post->ID, // use post_id, not post_ID
    'status'      => 'approve',
    'order' => 'ASC',
);

$comments = get_comments( $args );

 ?>
<div class="container">
  <h2>Comments Log</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Author</th>
        <th>Post Title</th>
        <th>Comments</th>
        <th>Replay Time</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($comments as $key => $value) { ?>
        <tr>
        <td><?php echo $value->comment_author  ?></td>
        <td><?php echo get_the_title($value->comment_post_ID);  ?></td>
        <td><?php echo $value->comment_content ?></td>
        <td><?php echo $value->comment_date ?></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>
