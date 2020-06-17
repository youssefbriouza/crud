<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Delivery</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <?PHP
        include "../core/reclamationC.php";
        $reclamation1C=new reclamationC();
        $listereclamation=$reclamation1C->afficherreclamations();

        ?>
		<div class="col-md-6">
    <div class="panel panel-default">
		 <div class="panel-heading">
       afficher reclamation
    </div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>id_client</th>
                <th>lettre</th>
                <th>date_rec</th>
                <th>num_telc</th>

            </tr>
        </thead>
        <?PHP
foreach($listereclamation as $row){
	?>
        <tbody>

            <tr>
                <td><?PHP echo $row['id_client']; ?></td>
                <td><?PHP echo $row['lettre']; ?></td>
                <td><?PHP echo $row['date_rec']; ?></td>
                <td><?PHP echo $row['num_telc']; ?></td>

                <td><form method="POST" action="supprimerreclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="id_client">
	</form>
	</td>

            </tr>

        </tbody>
        <?PHP
    }
    ?>
    </table>
</div>
</div>
</body>
</html>
