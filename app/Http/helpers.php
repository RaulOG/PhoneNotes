<?php
/**
 * @param array $routeParams
 * @param string $label
 * @return string
 */
function delete_form(array $routeParams, $label = 'Delete', array $options = [])
{
    $class = (isset($options['class'])) ? $options['class'] : 'btn btn-xs btn-danger';

    $form = '';
    $form .= Form::open(['method' => 'DELETE', 'route' => $routeParams]);
    $form .= Form::button($label, ['type' => 'submit', 'class' => $class]);
    $form .= Form::close();

    return $form;
}

function modify_form(array $routeParams, $label = 'Edit', array $options = [])
{
    $class = (isset($options['class'])) ? $options['class'] : 'btn btn-xs btn-warning';

    $form = '';
    $form .= Form::open(['method' => 'GET', 'route' => $routeParams]);
    $form .= Form::button($label, ['type' => 'submit', 'class' => $class]);
    $form .= Form::close();

    return $form;
}