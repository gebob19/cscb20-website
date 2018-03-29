<?php
function debug($data) {
  highlight_string("<? ".var_export($data, true)."\n");
}

require_once ABSPATH . INCLUDES . 'global-db.php';
require_once ABSPATH . INCLUDES . 'function-now.php';
require_once ABSPATH . INCLUDES . 'function-query.php';
require_once ABSPATH . INCLUDES . 'interface-model.php';
require_once ABSPATH . INCLUDES . 'class-model-user.php';
require_once ABSPATH . INCLUDES . 'class-model-gradable.php';
require_once ABSPATH . INCLUDES . 'class-model-grade.php';
require_once ABSPATH . INCLUDES . 'component-meta.php';
require_once ABSPATH . INCLUDES . 'component-header.php';
require_once ABSPATH . INCLUDES . 'component-footer.php';
require_once ABSPATH . INCLUDES . 'component-announcement.php';
require_once ABSPATH . INCLUDES . 'component-attachments.php';
require_once ABSPATH . INCLUDES . 'layout-default.php';
require_once ABSPATH . INCLUDES . 'layout-collection-list.php';
require_once ABSPATH . INCLUDES . 'layout-collection-single.php';
require_once ABSPATH . INCLUDES . 'layout-announcements.php';

User::create_table();
Gradable::create_table();
Grade::create_table();

User::insert((object) [
  'username' => 'chehabom',
  'password' => 'chehabom',
  'role' => 'student'
]);
User::insert((object) [
  'username' => 'gebotysb',
  'password' => 'gebotysb',
  'role' => 'instructor'
]);
User::updateByUsername('chehabom', 's', [
  'role' => 'ta',
]);
debug(User::selectByUsername('gebotysb'));
debug(User::selectAllByRole('ta'));
User::deleteByUsername('gebotysb');
