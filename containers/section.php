<!-- About Starts Here -->
<div class="row1">
  <?php foreach ($about_list as $about): ?>
    <p>• <?= $about ?></p>
  <?php endforeach; ?>
</div>
<!-- About Ends Here -->

<!-- Skill Starts Here -->
<h2>SKILLS</h2>
<div class="section-line"></div>

<div class="row2">
  <?php foreach ($skill_list as $skill): ?>
    <p><span><?= $skill['title'] ?>: </span><?= $skill['content'] ?></p>
  <?php endforeach; ?>
</div>
<!-- Skill Ends Here -->

<!-- Education Starts Here -->
<h2>EDUCATION</h2>
<div class="section-line"></div>

<div class="row3">
  <?php foreach ($education_list as $education): ?>
    <div class="row3-line">
      <div class="row3-line-row1">
        <p><?= $education['type'] ?></p>
        <p><?= $education['school'] ?></p>
      </div>

      <div class="row3-line-row2">
        <p><?= $education['year'] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<!-- Education Ends Here -->

<!-- Project Starts Here -->
<h2>PROJECTS</h2>
<div class="section-line"></div>

<div class="row4">
  <?php foreach ($project_list as $project): ?>
    <div class="row4-line">
      <p><?= $project['title'] ?></p>
      <p>→ Technologies: <?= $project['technologies'] ?></p>
      <p><?= $project['content'] ?></p>
      <p><a href="<?= $project['source'] ?>" target="_blank">→ Source Code: <?= $project['source'] ?></a></p>
    </div>
  <?php endforeach; ?>
</div>
<!-- Project Ends Here -->

<!-- Certificate Starts Here -->
<h2>CERTIFICATES</h2>
<div class="section-line"></div>

<div class="row5">
  <?php foreach ($certificate_list as $certificate): ?>
    <div class="row5-line">
      <p><?= $certificate['title'] ?></p>
      <p><?= $certificate['date'] ?></p>
    </div>
  <?php endforeach; ?>
</div>
<!-- Certificate Ends Here -->

<!-- Other Starts Here -->
<h2>OTHERS</h2>
<div class="section-line"></div>

<div class="row6">
  <p><?= $personal['other'] ?></p>
</div>
<!-- Other Ends Here -->
