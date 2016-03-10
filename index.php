<?php
  require_once('header.php');
  date_default_timezone_set('UTC');
  function phpbb_display_topic_svet($title, $date, $link) {
?>
<div class="linkItem">
  <div class="linkTitle"><a class="titlelink" title="<?php echo $title; ?>" href="http://forum.fmf.si/t/<?php echo $link; ?>"><?php echo $title; ?></a></div>
  <div class="linkDate">(<?php echo $date; ?>)</div>
</div>
<?php } ?>

<div id="title">
  <h1>Pozdravljeni na spletni strani Študentskega sveta FMF</h1>
</div>

<div class="item" id="newsDiv">
  <div class="itemTitle">Obvestila in debate s foruma</div>
  <div class="itemData">
<?php
    $json = file_get_contents('http://fmf.si/api/topics?type=svet');
    $obj = json_decode($json);
    $topics = $obj->topics;

    foreach ($topics as $topic) {
        $date = date_create($topic->updated);
        $date->setTimezone(new DateTimeZone('Europe/Ljubljana'));
        phpbb_display_topic_svet($topic->title, date_format($date, "j. n. Y, H:i"), $topic->slug);
    }
?>
  </div>
</div>

<div class="item itemSmall">
  <div class="itemTitle">Študentski svet</div>
  <div class="itemData">
    <p>Vabljeni ste, da si ogledate spletno stran Študentskega sveta Fakultete
    za matematiko in fiziko ter si preberete več o našem delovanju.</p>
  </div>
</div>

<div class="item itemSmall">
  <div class="itemTitle">Študentska mnenja</div>
  <div class="itemData">
<!--
  <p>Trenutno v postopku izvolitve ni pedagoških delavcev. <a href="/mnenja">Več...<a></p>
-->
  <p>Trenutno je v postopku izvolitve <strong>1</strong> pedagoški delavec. <a href="/mnenja">Več...<a></p>
  </div>
</div>

<?php require_once('footer.php'); ?>
