<?PHP

include "../entities/reclamation.php";
include_once "../core/reclamationC.php";

if (isset($_POST['id_client']) and isset($_POST['lettre']) and isset($_POST['date_rec']) and isset($_POST['num_telc']) ){
$reclamation1=new reclamation($_POST['id_client'],$_POST['lettre'],$_POST['date_rec'],$_POST['num_telc']);
$reclamation1C=new reclamationC();
$reclamation1C->ajouterreclamation($reclamation1);
echo "<script>alert('reclamation ajouteé avec succes')</script>";
header('Location: index.php');

}else{
	echo "verifier les champs";
}
//*/

?>
