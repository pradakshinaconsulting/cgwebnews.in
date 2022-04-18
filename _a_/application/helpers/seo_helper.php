<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('seo_script')) {
    function seo_script($seo = array()) {
        
        $CI = &get_instance();
        $CI->config->load('app_seo_config');
        
        $output = '<meta name="author" content="Krishna K Tiwari">';
        
        if(isset($seo['title']) && ($seo['title'] != ""))
        {
            $output .= "<title>".$seo['title'].' - '.$CI->config->item("app_title")."</title>";
            $output .= '<meta property="og:title" content="'.$seo['title'].' - '.$CI->config->item("app_title").'">';
        }
        else 
        {
            $output .= "<title>". $CI->config->item("app_title").' - '. $CI->config->item("app_tagline") ."</title>";
            $output .= '<meta property="og:title" content="'.$CI->config->item("app_title").' - '. $CI->config->item("app_tagline").'">';
        }
        
        if(isset($seo['description']) && ($seo['description'] != ""))
        {
            $output .= '<meta name="description" content="'.$seo['description'].'">';
            $output .= '<meta property="og:description"  content="'.$seo['description'].'">';
            
        }
        else 
        {
            $output .= '<meta name="description" content="'.$CI->config->item("app_description").'">';
            $output .= '<meta property="og:description"  content="'.$CI->config->item("app_description").'">';
        }
        
        if(isset($seo['keywords']) && ($seo['keywords'] != ""))
        {
            $output .= '<meta name="keywords" content="'.$seo['keywords'].'">';
        }
        else 
        {
            $output .= '<meta name="keywords" content="'.$CI->config->item("app_keywords").'">';
        }
        
        if(isset($seo['image']) && ($seo['image'] != ""))
        {
            $output .= '<meta property="og:image" content="'. $seo['image'] .'" />';
        }
        else 
        {
            $output .= '<meta property="og:image" content="'. base_url().$CI->config->item("app_image") .'" />';
        }
        
        if($CI->config->item("google_webmaster_code") != null)
        {
            $output .= '<meta name="google-site-verification" content="'.$CI->config->item("google_webmaster_code").'" />';
        }
        
        if($CI->config->item("bing_webmaster_code") != null)
        {
            $output .= '<meta name="msvalidate.01" content="'.$CI->config->item("bing_webmaster_code").'" />';
        }
        
        if($CI->config->item("google_analytics_code") != null)
        {
            $output .= '<script async src="https://www.googletagmanager.com/gtag/js?id='.$CI->config->item("google_analytics_code").'"></script>';
            $output .= '<script>';
            $output .= 'window.dataLayer = window.dataLayer || [];';
            $output .= 'function gtag() {dataLayer.push(arguments);}';
            $output .= "gtag('js', new Date());";
            $output .= "gtag('config', '".$CI->config->item("google_analytics_code")."');";
            $output .= '</script>';
        }
        
        echo $output;
    }
}