<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('prepare_title')) {
    function prepare_title($title) {
        return $title . ' - ' . 'My Sakti Online';
    }
}
if (!function_exists('slugify')) {
    function slugify($string) {
        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $string));
    }
}
if (!function_exists('pagination')) {
    function pagination($config = array('total' => '', 'page' => '', 'limit' => '', 'url' => '')) {
        extract($config);
        $num_links = 5;
        $text_first = '|&lt;';
        $text_last = '&gt;|';
        $text_next = '&gt;';
        $text_prev = '&lt;';
        $num_pages = ceil($total / $limit);
        $output = '<ul class="pagination">';
        $output.= '<li class="page-item"><a class="page-link" href="' . base_url() . $url . 'page=1" title="First Page">F</a></li>';
        if ($num_pages > 1) {
            if ($num_pages <= $num_links) {
                $start = 1;
                $end = $num_pages;
            } else {
                $start = $page - floor($num_links / 2);
                $end = $page + floor($num_links / 2);
                if ($start < 1) {
                    $end+= abs($start) + 1;
                    $start = 1;
                }
                if ($end > $num_pages) {
                    $start-= ($end - $num_pages);
                    $end = $num_pages;
                }
            }
            for ($i = $start;$i <= $end;$i++) {
                if ($page == $i) {
                    $output.= '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
                } else {
                    $output.= '<li class="page-item"><a class="page-link" href="' . base_url() . $url . 'page=' . $i . '">' . $i . '</a></li>';
                }
            }
        }
        $output.= '<li class="page-item"><a class="page-link"  href="' . base_url() . $url . 'page=' . $num_pages . '" title="Last Page">L</a></li>';
        $output.= '</ul>';
        echo $output;
    }
}
if (!function_exists('genRandomKey')) {
    function genRandomKey($n) {
        $abc = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'J', 'L', 'M', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $str = '';
        for ($i = 0;$i < $n;$i++) {
            $str.= $abc[rand(0, 9) ];
        }
        return $str;
    }
}
if (!function_exists('encrypt')) {
    function encrypt($plainText, $key = "shubhkamna") {
        $key = hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }
}
if (!function_exists('decrypt')) {
    function decrypt($encryptedText, $key = "shubhkamna") {
        $key = hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }
}
if (!function_exists('hextobin')) {
    function hextobin($hexString) {
        $length = strlen($hexString);
        $binString = "";
        $count = 0;
        while ($count < $length) {
            $subString = substr($hexString, $count, 2);
            $packedString = pack("H*", $subString);
            if ($count == 0) {
                $binString = $packedString;
            } else {
                $binString.= $packedString;
            }
            $count+= 2;
        }
        return $binString;
    }
}
