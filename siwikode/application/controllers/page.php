<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {

public function home(){
    // function render_backend tersebut dari file core/MY_Controller.php
    $this->render_backend('welcome_message'); // load view home.php
  }
}
?>