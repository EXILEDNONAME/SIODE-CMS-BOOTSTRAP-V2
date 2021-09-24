<?php

return [
  'dir' => ['Files'],
  'disks' => ['Files'],
  'route' => [
    [
      'prefix' => '/asd/file-manager',
      'middleware' => ['auth'],
    ],
  ],

  'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',
  'roots' => null,
  'options' => [],
  'root_options' => [],
];
