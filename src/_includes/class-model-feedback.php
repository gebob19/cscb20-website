<?php
Class Feedback implements Model {
  public static function create_table() {
    query("CREATE TABLE IF NOT EXISTS `Feedback`(
      `id` bigint auto_increment,
      `instructor_username` varchar(255) unique NOT NULL,
      `message` varchar(100) NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`id`),
      FOREIGN KEY (`instructor_username`) REFERENCES User(`username`)
      )");
  }

  public static function selectAll() {
    return query("SELECT `id`, 
      `instructor_username`,
      `message`,
      `created_at`, 
      `updated_at`, 
      FROM `Feedback`");
  }

  public static function insert($data) {
    $now = now();
    return query("INSERT INTO `Feedback` (
      `instructor_username`,
      `message`,
      `created_at`, 
      `updated_at`, 
    ) VALUES (
      ?,
      ?,
      ?,
      ?
    )", [
      'sss',
      $data->instructor_username,
      $data->message,
      $now,
      $now
    ]);
  }
}
?>
