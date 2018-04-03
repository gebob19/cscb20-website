<?php function component_header() { ?>
  <?php global $site; ?>
  <header class="page--header">
    <div class="page--header--title">
      <?=$site->title?>
    </div>
    <?php if (is_logged_in()): ?>
      <button id="page--header--burger">
        <img src="/img/ic_menu_4d4d4d_24px.svg"
          alt="Toggle Menu Visibility"/>
      </button>
    <?php endif; ?>
  </header>

  <?php if (is_logged_in()): ?>
    <nav id="page--menu">
      <a class="page--menu--item" href="/index.php">
        Announcements
      </a>
      <a class="page--menu--item" href="/assets/syllabus.pdf"
        target="_blank">
        Syllabus
      </a>
      <a class="page--menu--item" href="/course-team.php">
        Course Team
      </a>
      <a class="page--menu--item" href="/calendar.php">
        Calendar
      </a>
      <a class="page--menu--item" href="/lectures.php">
        Lectures
      </a>
      <a class="page--menu--item" href="/labs.php">
        Labs
      </a>
      <a class="page--menu--item" href="/assignments.php">
        Assignments
      </a>
      <a class="page--menu--item" href="/exams.html">
        Exams
      </a>
      <a class="page--menu--item" href="https://piazza.com/class/jcpjjp5l4bywd"
        target="_blank" rel="noopener">
        Piazza
      </a>
      <a class="page--menu--item" href="https://markus.utsc.utoronto.ca/cscb20w18"
        target="_blank" rel="noopener">
        Markus
      </a>
      <a class="page--menu--item" href="/logout.php">
        Logout
      </a>
    </nav>
  <?php endif; ?>
<?php } ?>
