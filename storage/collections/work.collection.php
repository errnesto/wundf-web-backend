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
    3 =>
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
    4 =>
    array (
      'name' => 'content',
      'label' => '',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' =>
      array (
        'fields' => array (
          0 => array('type' => 'markdown', 'name' => 'markdown', 'label' => 'Text'),
          1 => array('type' => 'asset', 'name' => 'image', 'label' => 'Image'),
          2 => array('type' => 'text', 'name' => 'title', 'label' => 'Title')
        )
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
