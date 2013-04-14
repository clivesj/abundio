<div id="optreden-node-form">
  <?php
    hide($form['title']);
    hide($form['field_status']);
    hide($form['field_datum']);
    hide($form['field_reageren']);
    hide($form['field_tijd']);
    hide($form['field_tijd_verzamelen']);
    hide($form['field_also_invite']);
    hide($form['field_invallers']);
    hide($form['field_zichtbaar']);
    hide($form['field_gage']);
    hide($form['field_verzend_e_mail']);
  ?>
  <?php print render($form['title']); ?>
  <?php print render($form['field_status']); ?>
  <div class = 'left-collumn'>
    <?php print render($form['field_datum']); ?>
    <?php print render($form['field_tijd']); ?>
    <?php print render($form['field_tijd_verzamelen']); ?>
     <?php print render($form['field_zichtbaar']); ?>

     <?php print render($form['field_verzend_e_mail']); ?>
  </div>
  <div class = 'right-collumn'>
     <?php print render($form['field_reageren']); ?>
     <?php print render($form['field_also_invite']); ?>
     <?php print render($form['field_invallers']); ?>
     <?php print render($form['field_gage']); ?>


  </div>
  <div class = 'clearfix'></div>
         <?php print drupal_render_children($form); ?>
</div>
