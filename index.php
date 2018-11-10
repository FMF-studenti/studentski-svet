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
    <p>Lahko si ogledate tudi našo <a href="https://www.facebook.com/Studentski.svet.FMF/" target="_blank">facebook stran</a>.</p>
  </div>
</div>

<div class="item itemSmall">
  <div class="itemTitle">Študentska mnenja</div>
  <div class="itemData">
<!--
  <p>Trenutno v postopku izvolitve ni pedagoških delavcev. <a href="/mnenja">Več...<a></p>
-->
<?php
    $izv = 6;
    if ($izv == 0) {
        echo "<p>Trenutno v postopku izvolitve ni pedagoških delavcev. <a href='/mnenja'>Več...<a></p>";
    } else if ($izv % 100 == 1) {
        echo "<p>Trenutno je v postopku izvolitve <b>$izv</b> pedagoški delavec. <a href='/mnenja'>Več...<a></p>";
    } else if ($izv % 100 == 2) {
        echo "<p>Trenutno sta v postopku izvolitve <b>$izv</b> pedagoška delavca. <a href='/mnenja'>Več...<a></p>";
    } else if ($izv % 100 == 3 || $izv % 100 == 4) {
        echo "<p>Trenutno so v postopku izvolitve <b>$izv</b> pedagoški delavci. <a href='/mnenja'>Več...<a></p>";
    } else {
        echo "<p>Trenutno je v postopku izvolitve <b>$izv</b> pedagoških delavcev. <a href='/mnenja'>Več...<a></p>";
    }
?>
  </div>
</div>

<?php require_once('footer.php'); ?>
