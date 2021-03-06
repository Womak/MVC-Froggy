<?php
    /**
    * Print debuginformation from the framework.
    */
    $fr->data['header'] = '<h1>Header: Froggy</h1>';
    $fr->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
    $fr->data['footer'] = '<p>Footer: &copy; Lydia by Mikael Roos (mos@dbwebb.se)</p>';

    function get_debug() 
    {
      $fr = CFroggy::Instance();
      $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($fr->config, true)) . "</pre>";
      $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($fr->data, true)) . "</pre>";
      $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($fr->request, true)) . "</pre>";
      return $html;
    }
       
    /**
    * Helpers for theming, available for all themes in their template files and functions.php.
    * This file is included right before the themes own functions.php
    */

    /**
    * Create a url by prepending the base_url.
    */
    function base_url($url) 
    {
      return CFroggy::Instance()->request->base_url . trim($url, '/');
    }

    /**
    * Return the current url.
    */
    function current_url() 
    {
      return CFroggy::Instance()->request->current_url;
    }
?>