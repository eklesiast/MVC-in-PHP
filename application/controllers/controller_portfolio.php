<?php >
class Controller_Portfolio extends Controller 
{

	function __contstruct(){
		$data = $this->model->get_data();
		$this->view->generate('portfolio_view.php','template_view.php',$data);
	}

}