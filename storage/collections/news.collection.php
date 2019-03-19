<?php
 return array (
  'name' => 'news',
  'label' => 'News',
  '_id' => 'news5c90eb3d8093e',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'date',
      'label' => '',
      'type' => 'date',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'format' => '',
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
      'name' => 'link',
      'label' => '',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'placeholder' => 'https://',
        'pattern' => 'https?://.+',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'image',
      'label' => '',
      'type' => 'image',
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
    3 => 
    array (
      'name' => 'text',
      'label' => '',
      'type' => 'markdown',
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
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1553001277,
  '_modified' => 1553005743,
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
);