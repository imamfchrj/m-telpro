<?php

function hashpass($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt');
    $with_love = $CI->config->item('with_love');
    $hashed_value = $with_love.md5($salt.$pass);
    return strtoupper($hashed_value);
}


function get_from_sess($val){
    if(isset($_SESSION[$val])) {
        return $_SESSION[$val];
    }
    return "";
}

function get_text_gender($id=0){
    $data=array(
        0 => 'Pilih Jenis Kelamin',
        1 => 'Laki-Laki',
        2 => 'Perempuan',
        3 => 'Tidak ingin disebutkan',
    );
    if($id<0 || $id>3){
        $id=0;
    }
    return $data[$id];
}

function cek_checked($val=0){
    if($val){
        return "checked";
    }
    return "";
}

function cekmenu_ajax($menu=0){
    return true;
}


function get_menu($role_id=1){
    $CI =& get_instance();
    $CI->load->model('admin/mastermenu_m');
    $data=$CI->mastermenu_m->get_master_menu($role_id);
    $i=0;
    foreach($data as $list){
        $sub_menu=$CI->mastermenu_m->get_sub_menu($role_id,$list->id);
        $data[$i]->sub_menu=$sub_menu;
        $i++;
    }
    return $data;
}