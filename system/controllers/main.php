<?php
class main extends Controller {
	public function __construct() {
            parent::__construct();
            //Call your globals here
	}
	
	public function index() {
    print 'Echo $just $a $playground =)';
	}

  public function canvasTouch() {
    $this->loadView('canvasTouch/test',array());
  }
}
?>