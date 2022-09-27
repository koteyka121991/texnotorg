<?php
add_action('pre_get_posts', 'events_base_filter');

function events_base_filter($query)
{

    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (!$query->is_post_type_archive('product')) {
        return;
    }
    if (isset($_GET['product-categories'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [];
        $tax_query[] = [
            'taxonomy' => 'product-categories',
            'field' => 'slug',
            'terms' => explode(',', $_GET['product-categories'])
        ];

        $query->set('tax_query', $tax_query);
        // var_dump($query->tax_query->queried_terms);
    }
    if (isset($_GET['product-tags'])) {
        $tax_query = $query->get('tax_query');
        $tax_query = is_array($tax_query) ? $tax_query : [];
        $tax_query[] = [
            'taxonomy' => 'product-tags',
            'field' => 'slug',
            'terms' => explode(',', $_GET['product-tags'])
        ];

        $query->set('tax_query', $tax_query);
        var_dump($query->tax_query->queried_terms);
    }
}