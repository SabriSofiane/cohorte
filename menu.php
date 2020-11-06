<!--Menu du site web-->
<?php 
    
    function contains($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }
  
    $racine = './';
    $repertoire = array('administration' , 'support' );  // les répertoires de premier niveau du site
	if  (contains($_SERVER['PHP_SELF'], $repertoire)){
		$racine = '../';
	}
	

?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.php">LPO Touchard - Washington</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $racine ?>formulaire.php">Effectuer son suivi</a></li>
                                <li><a class="dropdown-item" href="<?php echo $racine ?>contacter.php">Contacter</a></li>
                                <li><a class="dropdown-item" href="<?php echo $racine ?>informations.php">Mentions légales</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $racine ?>administration/vue_eleves.php">Administration</a></li>
                    </ul>
                </div> <!-- navbar-collapse.// -->

            </nav>
        