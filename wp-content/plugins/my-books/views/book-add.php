<?php 
  // if($_POST['submit']){
  //  global $wpdb;
  //  $data = array('name'=>$_POST['name'],'author'=>$_POST['author'],'about'=>$_POST['about'],'book_image'=>'1');
  //   $result = $wpdb->insert('wp_books',$data);
  // }
  // 
// if ( have_posts() ) :
//   while ( have_posts() ) : the_post();
//     echo "Hello World";
//   endwhile;
// else :
//   echo wpautop( 'Sorry, no posts were found' );
// endif;
// 

// global $current_user;
// global $post;

// $comments = get_comments(array(
//         'post_id' => $post->ID,
//         'number' => '2' ));
    
// echo "<pre>";
// print_r($comments);
// echo "</pre>";

// get_currentuserinfo();                      

// $args = array(
//     'author'        =>  $current_user->ID, // I could also use $user_ID, right?
//     'orderby'       =>  'post_date',
//     'order'         =>  'ASC' 
//     );

// get his posts 'ASC'
// $current_user_posts = get_posts( $args );

// echo "<pre>";
// print_r($current_user_posts);
// echo "</pre>";

$args = array(
  'post_id' => $post->ID // use post_id, not post_ID
);
$comments = get_comments($args);
// foreach($comments as $comment) :

//   echo($comment->comment_content.''."<br />");
// endforeach;
echo "<pre>";
print_r($comments);

  //Gather comments for a specific page/post 
 //  $comments = get_comments(array(
 //    'post_id' => $post->ID,
 //     'status' => 'approve'
 //  ));
 // $data =  wp_list_comments(array(
 //    'per_page' => 10, // Allow comment pagination
 //     'reverse_top_level' => false //Show the latest comments at the top of the list
 //   ), $comments);
 ?>

<div class="container">
  <h2>Add New Book</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="name">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author">
    </div>
    <div class="form-group">
      <label for="about">About:</label>
      <input type="text" class="form-control" id="about" placeholder="Enter about" name="about">
    </div>
    <input type="submit" name="submit" class="btn btn-default">
  </form>
</div>

