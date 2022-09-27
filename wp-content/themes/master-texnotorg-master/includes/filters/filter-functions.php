<?php 
function get_filter_by_taxonomy_links( $taxonomy = '',$title = '', $class = '', $query_type = 'AND') {
    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false      
    ]);
    $fn = '';
    if (strpos($taxonomy, 'product') !== false) {
        $fn = "get_events_string_url";
    }
    ?>

    <div class="event_filter_block">
    <h3><?php _e($title, 'oceanwp'); ?></h3>
    <ul class="<?php echo $class; ?>">
    <?php foreach ($terms as $term): ?> 
        <?php 
        $option_is_set = false;
        if($query_type === 'AND'){
        $link = remove_query_arg($taxonomy, $fn());
        $link_terms = isset($_GET[$taxonomy]) ? explode(',', $_GET[$taxonomy]) : [];
       
        if(in_array($term->slug, $link_terms)){
            $option_is_set = true;
            $key = array_search($term->slug, $link_terms);
            unset($link_terms[$key]);      
        }
        else {
            $link_terms[] = $term->slug;
        }
        if(!empty($link_terms)){
        $link = add_query_arg($taxonomy,implode(',', $link_terms),$link );
        }
    } 
    else {
        $link = remove_query_arg($taxonomy, $fn());
        if($term->slug === $_GET[$taxonomy]){
            $option_is_set = true;
        }
        $link = add_query_arg($taxonomy, $term->slug, $fn());
    }
        ?>
         <li><a href="<?php echo $link; ?>" class="<?php echo $option_is_set ? 'active' : ''; ?>"><?php echo $term->name; ?></a></li>
    <?php endforeach; ?>
</ul>
    </div>
    <?php
}

   

   function get_events_string_url()
   {   
       $link = get_post_type_archive_link('product');
   
       if (isset($_GET['product-categories'])) {
           $link = add_query_arg('product-categories', wp_unslash($_GET['product-categories']), $link);
       }   
       if (isset($_GET['product-tags'])) {
           $link = add_query_arg('product-tags', wp_unslash($_GET['product-tags']), $link);
       }   
       return $link;  
}
if (!function_exists('wc_clean')) {
    function wc_clean($var)
    {
        if (is_array($var)) {
            return array_map('wc_clean', $var);
        } else {
            return is_scalar($var) ? sanitize_text_field($var) : $var;
        }
    }
}
