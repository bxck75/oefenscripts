<?php
class artistController extends Controller{
        // overview van artists
	public function overview(){
		$this->setTitle('Overzicht artists');
		$this->loadModel('artist');
		$this->artists = $this->model->getArtists();
		$this->render('artist/_overview.tpl');
	}
        // 1 artist bekijken
	public function oneArtist(){
		$this->setTitle('Een artist bekijken');
                $this->id = $_GET['artist_id'];
                $this->loadModel('artist');
                $this->artist = $this->model->getArtist($this->id);
                $this->render('artist/_viewone.tpl');
	}
        // artist formulier afbeelden
	public function addArtist(){
		$this->setTitle('Voeg artist toe');
                $this->render('artist/_add.tpl');
	}
        //
        public function bewerkArtist(){
                $this->setTitle('Bewerk artist');
                $this->id = $_GET['artist_id'];
                $this->loadModel('artist');
                $this->updated_artist = $this->model->getArtist($this->id);
                $this->render('artist/_bewerk.tpl');
	}
        // artist verwijderen
	public function deleteArtist(){
		$this->setTitle('Delete artist');
                $this->id = $_GET['artist_id'];
                $this->loadModel('artist');
		$this->deleted_artist = $this->model->deleteArtist($this->id);
                $this->render('artist/_delete.tpl');
	}
        //  artist inserten in de database
	public function insertArtist(){
		$this->setTitle('Voeg artist toe');
                $this->name = $_POST['name'];
                $this->startdate = $_POST['start_date'];
                $this->enddate = $_POST['end_date'];
                $this->price = $_POST['price'];
                $this->loadModel('artist');
		$this->added_artist = $this->model->insertArtist($this->name,$this->startdate,$this->enddate,$this->price);
                $this->render('artist/_added.tpl');
	}
        //  artist updaten in de database
	public function updateArtist(){
		$this->setTitle('Update artist');
                $this->name = $_POST['name'];
                $this->id = $_POST['artist/artist_id'];
                $this->startdate = $_POST['start_date'];
                $this->enddate = $_POST['end_date'];
                $this->price = $_POST['price'];
                $this->loadModel('artist');
		$this->added_artist = $this->model->updateArtists($this->id,$this->name,$this->startdate,$this->enddate,$this->price);
                $this->render('artist/_bewerkt.tpl');
	}
}