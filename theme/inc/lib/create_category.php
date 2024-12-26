<?php
function create_category($category_name, $category_slug = '', $parent_id = 0)
{

    global $category_cache;
    // Проверяем, существует ли категория с таким же именем

    $term_id = $category_cache[$category_slug] ?? false;

    if (!$term_id) {
        // Создаем новую категорию
        $result = wp_insert_term(
            $category_name, // Название категории
            'category',     // Таксономия
            [
                'slug' => $category_slug, // Слаг (необязательно)
                'parent' => $parent_id     // ID родительской категории (необязательно)
            ]
        );

        // Проверка на ошибки
        if (is_wp_error($result)) {
            return $result->get_error_message();
        } else {
            $category_cache[$category_slug] = $result['term_id'];
            return $result['term_id']; // Возвращаем ID созданной категории
        }
    } else {
        return $term_id; // Возвращаем ID существующей категории
    }
}
