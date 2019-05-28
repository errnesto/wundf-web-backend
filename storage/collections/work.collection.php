<?php
 return array (
  'name' => 'work',
  'label' => 'Work',
  '_id' => 'work5cc823c338cb8',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => '',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'image',
      'label' => '',
      'type' => 'asset',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'imageAttribution',
      'label' => '',
      'type' => 'set',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'license',
            'type' => 'text',
            'options' => 
            array (
              'default' => 'CC BY-SA 2.0',
            ),
          ),
          1 => 
          array (
            'name' => 'licenseURL',
            'type' => 'text',
            'options' => 
            array (
              'placeholder' => 'https://',
              'pattern' => 'https?://.+',
              'default' => 'https://creativecommons.org/licenses/by-sa/2.0/',
            ),
          ),
          2 => 
          array (
            'name' => 'text',
            'type' => 'text',
          ),
          3 => 
          array (
            'name' => 'sourceURL',
            'type' => 'text',
            'options' => 
            array (
              'placeholder' => 'https://',
              'pattern' => 'https?://.+',
            ),
          ),
        ),
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
    ),
    3 => 
    array (
      'name' => 'teaserText',
      'label' => '',
      'type' => 'textarea',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    4 => 
    array (
      'name' => 'linkText',
      'label' => '',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => false,
      'acl' => 
      array (
      ),
    ),
    5 => 
    array (
      'name' => 'content',
      'label' => '',
      'type' => 'layout',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'enabled' => 
        array (
          0 => 'text',
        ),
      ),
      'width' => '1-1',
      'lst' => false,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
  ),
  'sortable' => true,
  'in_menu' => true,
  '_created' => 1556620227,
  '_modified' => 1559056579,
  'color' => '',
  'acl' => 
  array (
    'public' => 
    array (
      'entries_view' => true,
    ),
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'business.svg',
);