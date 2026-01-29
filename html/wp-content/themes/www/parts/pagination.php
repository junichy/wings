<?php
$args = array(
    'mid_size' => 3,
    'first_text' => 'first',
    'last_text' => 'last',
    // 'prev_text' => '&lt;&lt;',
    // 'next_text' => '&gt;&gt;',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>