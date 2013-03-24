<?php

/**
 * Author model config
 */

return array(
    'title' => 'Authors',

    'single' => 'author',

    'model' => 'Author',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'email' => array(
            'title' => 'E-mail',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'email'
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'email' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Password',
            'type' => 'text',
        ),
    ),
);