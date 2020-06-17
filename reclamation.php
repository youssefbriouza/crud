<?PHP
class Reclamation {
	private $id_client;
	private $lettre;
	private $date_rec;
	private $num_telc;

		function __construct($id_client,$lettre){
		$this->id_client=$id_client;
		$this->lettre=$lettre;
	}

	function getid_client () {
		return $this->id_client;
	}
	function getnum_telc(){
		return $this->num_telc;
	}
	function getdate_rec(){
		return $this->date_rec;
	}
	function getlettre(){
		return $this->lettre;
	}

	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setnum_telc($num_telc){
		$this->num_telc= $num_telc;
	}
	function setdate_rec($date_rec){
		$this->date_rec=$date_rec;
	}
	function setlettre($lettre){
		$this->lettre=$lettre;
	}

}

?>
