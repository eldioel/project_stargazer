<?php 

function render($pageContent, $class_active, $data)
{
    $CI = &get_instance();
    $data['page_content'] = $pageContent;
    $data['page'] = $class_active;
    $CI->load->view('layouts/V_base_layout', $data);
}
