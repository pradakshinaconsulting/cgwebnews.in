<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function validate_admin()
{
    $CI = &get_instance();
    $isAdminLoggedIn = $CI->session->userdata('isAdminLoggedIn');
    
    if($isAdminLoggedIn == TRUE)
    {
        
    }
    else
    {
        redirect('admin/');
    }
}

function validate_user()
{
    $CI = &get_instance();
    $isUserLoggedIn = $CI->session->userdata('isUserLoggedIn');
    
    if($isUserLoggedIn == TRUE) 
    {
        
    }
    else
    {
        redirect('/');
    }
}

