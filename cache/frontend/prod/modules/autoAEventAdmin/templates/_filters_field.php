<?php if ($field->isPartial()): ?>
  <?php include_partial('aEventAdmin/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('aEventAdmin', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
     <?php echo $form[$name]->renderLabel($label) ?>
    <div class="a-admin-filter-field">
      <?php echo $form[$name]->renderError() ?>

      <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>

      <?php if ($help || $help = $form[$name]->renderHelp()): ?>
        <div class="a-help"><?php echo __($help, array(), 'messages') ?></div>
      <?php endif; ?>
    </div>
<?php endif; ?>
