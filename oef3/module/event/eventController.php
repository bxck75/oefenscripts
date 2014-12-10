<?php
class eventController extends Controller{
	public function overview(){
		$this->setTitle('Overzicht events');
		
		$this->loadModel('event');
		
		$this->events = $this->model->getEvents();
		
		$this->render('event_overview.tpl');
	}
}