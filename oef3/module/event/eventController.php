<?php
class eventController extends Controller{
        // overview van events
	public function overview(){
		$this->setTitle('Overzicht events');
		$this->loadModel('event');
		$this->events = $this->model->getEvents();
		$this->render('event_overview.tpl');
	}
        // 1 event bekijken
	public function oneEvent(){
		$this->setTitle('Een event bekijken');
                $this->id = $_GET['event_id'];
                $this->loadModel('event');
                $this->event = $this->model->getEvent($this->id);
                $this->render('event_viewone.tpl');
	}
        // event formulier afbeelden
	public function addEvent(){
		$this->setTitle('Voeg events toe');
                $this->render('event_add.tpl');
	}
        // event verwijderen
	public function deleteEvent(){
		$this->setTitle('Delete event');
                $this->id = $_GET['event_id'];
                $this->loadModel('event');
		$this->deleted_event = $this->model->deleteEvent($this->id);
                $this->render('event_delete.tpl');
	}
        //  event inserten in de database
	public function insertEvent(){
		$this->setTitle('Voeg event toe');
                $this->name = $_POST['name'];
                $this->startdate = $_POST['start_date'];
                $this->enddate = $_POST['end_date'];
                $this->price = $_POST['price'];
                $this->loadModel('event');
		$this->added_event = $this->model->insertEvent($this->name,$this->startdate,$this->enddate,$this->price);
                $this->render('event_added.tpl');
	}
}