<?php
require_once '../config.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    $page = (object) [
      'title' => 'Lab 11',
      'attachments' => [
        BASEURL . 'assets/lab11/JSON and AJAX.pdf',
        BASEURL . 'assets/lab11/lab11.sql',
        BASEURL . 'assets/lab11/login.html',
        BASEURL . 'assets/lab11/userAuth.php',
      ],
    ];
    
    function component_content() {?>
      <p> AJAX and JSON </p>
    <?php }

    layout_collection_single();
    exit();
}
