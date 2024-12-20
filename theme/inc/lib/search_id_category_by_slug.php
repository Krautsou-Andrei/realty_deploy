<?php
function search_id_category_by_slug($category_slug)
{
    $category = get_term_by('slug', $category_slug, 'category');

    if ($category) {
        return $category->term_id;
    } else {
        return null;
    }
}
