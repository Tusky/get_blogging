<?php

/**
 * Posts model config
 */

return array(
    'form_width' => 800,
    'title' => 'Posts',

    'single' => 'post',

    'model' => 'Post',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => 'Title',
        ),
        'body' => array(
            'title' => 'Body',
        ),
        'author' => array(
            'title' => 'Author',
            'relationship' => 'author',
            'select' => "((:table).email)",
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'tags' => array(
            'type' => 'relationship',
            'title' => 'Tags',
            'name_field' => 'name',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'body' => array(
            'title' => 'Body',
            'type' => 'wysiwyg',
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        ),
        'author' => array(
            'title' => 'Author',
            'type' => 'relationship',
            'name_field' => 'email',
        ),
        'tags' => array(
            'title' => 'Tag',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
    ),
);