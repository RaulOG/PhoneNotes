<?php
/**
 * @param array $routeParams
 * @param string $label
 * @return string
 */
function delete_form(array $routeParams, $label = 'Delete', array $options = [])
{
    $class = (isset($options['class'])) ? $options['class'] : 'btn btn-danger';

    $form = '';
    $form .= Form::open(['method' => 'DELETE', 'route' => $routeParams]);
    $form .= Form::button($label, ['type' => 'submit', 'class' => $class]);
    $form .= Form::close();

    return $form;
}