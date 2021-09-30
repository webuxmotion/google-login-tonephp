<?php
  $type = '';
  $show = false;
  $content = '';

  if (isset($_SESSION['errors'])) {
    $type = 'is-danger';
    $content = $_SESSION['errors'];
    $show = true;
  } else if (isset($_SESSION['success'])) {
    $type = 'is-success';
    $content = $_SESSION['success'];
    $show = true;
  }
?>


<?php if ($show): ?>
<article class="message mt-5 <?=$type?>">
  <div class="message-body">
    <?=$content?>
  </div>
</article>
<?php endif; ?>

<?php 

unset($_SESSION['errors']); 
unset($_SESSION['success']); 

?>