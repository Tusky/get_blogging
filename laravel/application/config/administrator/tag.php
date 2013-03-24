<?php

/**
 * Tag model config
 */

return array(

    'title' => 'Tags',

    'single' => 'tag',

    'model' => 'Tag',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Title',
        ),
        'slug' => array(
            'title' => 'Slug',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'name',
        'slug'
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        ),
    ),
);