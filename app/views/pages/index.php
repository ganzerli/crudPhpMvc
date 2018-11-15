<?php require APPROOT . "/views/template/header.php" ;
// we heve access to that APPROOT because the config file is also required in bootstrap, that loads the libraries and Core, that takes the url and instancites
// an object of the searched class, this file is loaded as dfault since is called from the view in class Pages,istanciated as default if the url has not other  views and parameters to specify the method to call.. 
?>

<h1> <?php echo $data["title"]; ?> </h1>








<?php require APPROOT."/views/template/footer.php" ?>