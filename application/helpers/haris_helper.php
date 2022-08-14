<?php
function pre($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "<br>";
    die("________________________________________");
}


function lq()
{
    $CI       =      &get_instance();
    $query    =      $CI->db->last_query();
    pre($query);
}


function get_type_name_by_id($type, $type_id = '', $field = 'name')
{
    $CI = &get_instance();
    $CI->db->where($type . '_id', $type_id);
    $query = $CI->db->get($type);
    $result = $query->result_array();
    foreach ($result as $row)
        return $row[$field];
}



function get_image_url($type = '', $id = '')
{

    if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
        $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
    else
        $image_url = base_url() . 'uploads/user.jpg';

    return $image_url;
}
