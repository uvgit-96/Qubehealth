<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


   /**
     * This function used to load views
     * @param {string} $viewName : This is view name
     * @param {mixed} $headerInfo : This is array of header information
     * @param {mixed} $pageInfo : This is array of page information
     * @param {mixed} $footerInfo : This is array of footer information
     * @return {null} $result : null
     */
    function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL){
        $ci =& get_instance();

        $ci->load->view('app/_parts/header',    $headerInfo);
        $ci->load->view('app/_parts/preloader', $headerInfo);
        $ci->load->view('app/_parts/topnav',    $headerInfo);
        $ci->load->view('app/_parts/sidebar',   $headerInfo);
        $ci->load->view('app/_parts/breadcum',  $headerInfo);
        $ci->load->view('app/'.$viewName,   $pageInfo);
        $ci->load->view('app/_parts/footer', $footerInfo);
    }
