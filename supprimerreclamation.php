<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["id_client"])){
	$reclamationC->supprimerreclamation($_POST["id_client"]);
	header('Location: afficherreclamation.php');
}

?>
