<?php
function has_page_permission($role, $page=NULL) {
  $page = $page ?: strtok($_SERVER["REQUEST_URI"], '?');
  $role_permissions = [
    '_public' => [
      '/login.php',
      '/404.php',
      '/register.php',
    ],
    'student' => [
      '/feedback.php',
      '/submit-feedback.php',
      '/index.php',
      '/404.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
      '/student-grades.php',
      '/student-remark.php',
      '/assignments/2018-02-09-a1.php',
      '/assignments/2018-03-09-a2.php',
      '/lectures/2018-01-01-quiz-soln.php',
      '/lectures/2018-01-08-lec1.php',
      '/lectures/2018-01-15-lec2.php',
      '/lectures/2018-01-15-ps1.php',
      '/lectures/2018-01-22-lec3.php',
      '/lectures/2018-01-22-ps2.php',
      '/lectures/2018-01-29-lec4.php',
      '/lectures/2018-02-05-lec5.php',
      '/lectures/2018-02-05-ps3.php',
      '/lectures/2018-02-19-lec7.php',
      '/lectures/2018-02-26-lec9.php',
      '/lectures/2018-03-05-lec10.php',
      '/lectures/2018-03-12-lec11.php',
      '/lectures/2018-03-19-lec12.php',
      '/exams/2018-02-05-midterm.php',
      '/labs/2018-01-08-software-inst.php',
      '/labs/2018-01-08-w1.php',
      '/labs/2018-01-15-w2.php',
      '/labs/2018-01-22-w3.php',
      '/labs/2018-01-29-w4.php',
      '/labs/2018-02-05-w5.php',
      '/labs/2018-02-12-w6.php',
      '/labs/2018-02-26-w7.php',
    ],
    'ta' => [
      '/index.php',
      '/404.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/class-grades.php',
      '/exams.php',
      '/remark.php',
      '/update-grade.php',
      '/assignments/2018-02-09-a1.php',
      '/assignments/2018-03-09-a2.php',
      '/lectures/2018-01-01-quiz-soln.php',
      '/lectures/2018-01-08-lec1.php',
      '/lectures/2018-01-15-lec2.php',
      '/lectures/2018-01-15-ps1.php',
      '/lectures/2018-01-22-lec3.php',
      '/lectures/2018-01-22-ps2.php',
      '/lectures/2018-01-29-lec4.php',
      '/lectures/2018-02-05-lec5.php',
      '/lectures/2018-02-05-ps3.php',
      '/lectures/2018-02-19-lec7.php',
      '/lectures/2018-02-26-lec9.php',
      '/lectures/2018-03-05-lec10.php',
      '/lectures/2018-03-12-lec11.php',
      '/lectures/2018-03-19-lec12.php',
      '/exams/2018-02-05-midterm.php',
      '/labs/2018-01-08-software-inst.php',
      '/labs/2018-01-08-w1.php',
      '/labs/2018-01-15-w2.php',
      '/labs/2018-01-22-w3.php',
      '/labs/2018-01-29-w4.php',
      '/labs/2018-02-05-w5.php',
      '/labs/2018-02-12-w6.php',
      '/labs/2018-02-26-w7.php',
    ],
    'instructor' => [
      '/index.php',
      '/404.php',
      '/logout.php',
      '/course-team.php',
      '/calendar.php',
      '/lectures.php',
      '/labs.php',
      '/assignments.php',
      '/exams.php',
      '/class-grades.php',
      '/instructor-feedback.php',
      '/remark.php',
      '/update-grade.php',
      '/assignments/2018-02-09-a1.php',
      '/assignments/2018-03-09-a2.php',
      '/lectures/2018-01-01-quiz-soln.php',
      '/lectures/2018-01-08-lec1.php',
      '/lectures/2018-01-15-lec2.php',
      '/lectures/2018-01-15-ps1.php',
      '/lectures/2018-01-22-lec3.php',
      '/lectures/2018-01-22-ps2.php',
      '/lectures/2018-01-29-lec4.php',
      '/lectures/2018-02-05-lec5.php',
      '/lectures/2018-02-05-ps3.php',
      '/lectures/2018-02-19-lec7.php',
      '/lectures/2018-02-26-lec9.php',
      '/lectures/2018-03-05-lec10.php',
      '/lectures/2018-03-12-lec11.php',
      '/lectures/2018-03-19-lec12.php',
      '/exams/2018-02-05-midterm.php',
      '/labs/2018-01-08-software-inst.php',
      '/labs/2018-01-08-w1.php',
      '/labs/2018-01-15-w2.php',
      '/labs/2018-01-22-w3.php',
      '/labs/2018-01-29-w4.php',
      '/labs/2018-02-05-w5.php',
      '/labs/2018-02-12-w6.php',
      '/labs/2018-02-26-w7.php',
    ],
  ];
  return in_array($page, $role_permissions[$role]);
}
