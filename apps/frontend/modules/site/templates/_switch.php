<?php use_helper('Debug') ?>


  <li class="a-login-site" id="a-site-switch">

<!--
<form method="POST" action="<?php echo url_for('a/language') ?>">
  <?php $form = new aLanguageForm(null, array('languages' => sfConfig::get('app_a_i18n_languages'))) ?>
  <?php echo $form->renderHiddenFields() ?>
  <?php echo $form['language']->render() ?>
</form>
-->

      <?php
/*
      $site = Doctrine::getTable('Site')->createQuery('a')->execute();
      log_message($site, 'err');
*/      
       $form = new sfWidgetFormDoctrineChoice(array(
         'model' => 'site',
         'method' => 'getDomain'
         ));
         
       ?>
      <?php //echo $form->renderHiddenFields() ?>
      <?php echo $form->render('name', Site::getCurrentId()); ?>

		<script type="text/javascript" charset="utf-8">
      $('#a-site-switch select').change(function() {
        window.location.href = 'http://' + $(this).find('option:selected').text();
      });
    </script>
  </li>