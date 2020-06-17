<?PHP

include "../rating.php";
include_once "../ratingC.php";

if (isset($_POST['id']) and isset($_POST['name']) and isset($_POST['rate']) ){
$rating1=new rating($_POST['id'],$_POST['name'],$_POST['rate']);
$rating1C=new ratingC();
$rating1C->ajouterrating($rating1);
echo "<script>alert('avis ajouteé avec succes')</script>";
header('Location: index.php');

}else{
	echo "verifier les champs";
}
//*/

?>
