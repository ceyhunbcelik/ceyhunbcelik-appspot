<?php

  // Database
  $personal = require_once('./database/personal.php');
  $about_list = require_once('./database/about.php');
  $skill_list = require_once('./database/skill.php');
  $education_list = require_once('./database/education.php');
  $project_list = require_once('./database/project.php');
  $certificate_list = require_once('./database/certificate.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- Meta Starts Here -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Ends Here -->

    <!-- CSS Starts Here -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- CSS Ends Here -->

    <!-- Title Starts Here -->
    <title>Ceyhun Bahadır Çelik</title>
    <!-- Title Ends Here -->

  </head>
  <body>

    <!-- Main Starts Here -->
    <main>

      <!-- Header Starts Here -->
      <header><?php require_once('./containers/header.php') ?></header>
      <!-- Header Ends Here -->

      <!-- Section Starts Here -->
      <section><?php require_once('./containers/section.php') ?></section>
      <!-- Section Ends Here -->

      <!-- Footer Starts Here -->
      <footer><?php require_once('./containers/footer.php') ?></footer>
      <!-- Footer Ends Here -->

    </main>
    <!-- Main Ends Here -->


  </body>
</html>
