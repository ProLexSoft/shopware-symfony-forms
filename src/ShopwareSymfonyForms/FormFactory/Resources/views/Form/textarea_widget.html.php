<?php
$class = isset($class) ? $class : '';
if (!isset($type) || 'file' != $type) {
    $attr['class'] = trim($class . ' ' . $view['form']->block($form, 'form_widget_class') . ' ' . $view['form']->block($form, 'form_error'));
}
?>
<textarea <?php echo $view['form']->block($form, 'widget_attributes', ['attr' => $attr]) ?>><?php echo $view->escape($value) ?></textarea>
