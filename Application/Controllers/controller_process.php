<?php
class Controller_Process extends Controller { 
    function action_index() { 
        $this->view->generate('process_view.php', 'template_view.php'); 
    } 
}
?>