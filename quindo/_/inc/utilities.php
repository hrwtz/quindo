<?php

function quindo_svg_icon($id, $title = NULL){
    ?>
    <svg viewBox="0 0 100 100" class="icon icon-<?php echo $id; ?>">
      <use xlink:href="#icon-<?php echo $id; ?>"></use>
      <?php if ($title) : ?><title><?php echo $title; ?></title><?php endif; ?>
    </svg>
    <?php
}

// Add pattern page
if (isset($_GET['activated']) && is_admin()){
    $new_page_title = 'Theme Patterns';
    $new_page_template = 'page-patterns.php';
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_status' => 'private',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
                update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}