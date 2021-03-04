<div class="col1">
  <h1><?= $personal['name_surname'] ?></h1>
  <p><?= $personal['job'] ?></p>
</div>

<div class="col2">
  <p><a href="mailto:<?= $personal['email'] ?>"><?= $personal['email'] ?></a></p>
  <p><a href="<?= $personal['contact'] ?>:<?= $personal['phone'] ?>"><?= $personal['phone'] ?></a></p>
  <p><a href="<?= $personal['map'] ?>" target="_blank"><?= $personal['location'] ?></a></p>
  <p><a href="<?= $personal['link1_url'] ?>" target="_blank"><?= $personal['link1_name'] ?></a></p>
  <p><a href="<?= $personal['link2_url'] ?>" target="_blank"><?= $personal['link2_name'] ?></a></p>
</div>
