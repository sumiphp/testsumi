
<? php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class CustomError404 extends CI_Controller { 
    public function __construct() { 
        parent:: __construct(); 
        $this -> load -> helper('url'); 
    } 
  
    public function index() { 
        $this -> output -> set_status_header('404'); 
        echo "hello";
        //$this -> load -> view('error404'); 
    } 
}
?>