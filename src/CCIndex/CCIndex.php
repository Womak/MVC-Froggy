<?php
    /**
    * Standard controller layout.
    *
    * @package FroggyCore
    *-- Based on MOS creation Lydia MVC --
    */
    class CCIndex implements IController 
    {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() 
       {   
          global $fr;
          $fr->data['title'] = "The Index Controller";
       }

    } 
?>