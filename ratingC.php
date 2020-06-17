<?PHP
include_once "db_connection.php";
class ratingC {
function afficherrating ($rating){
		echo "id: ".$rating->getid()."<br>";
    echo "name: " .$rating->getname()."<br>" ;
		echo "rate: " .$rating->getrate()."<br>" ;


	}
	function rating($rating){
		$sql="insert into ratee (id,name,rate) values (:id, :name,:rate)";
		$db = config::getConnexion();
		try{
				$req=$db->prepare($sql);

				$id=$rating->getid();
				$name=$rating->getname();
				$rate=$rating->getrate();


		$req->bindValue(':id',$id);
		$req->bindValue(':name',$name);
		$req->bindValue(':rate',$rate);


						$req->execute();

				}
				catch (Exception $e){
						echo 'Erreur: '.$e->getMessage();
				}

	}
}
?>
