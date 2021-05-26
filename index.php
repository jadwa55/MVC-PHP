//contrôleur fait le lien entre les deux (modèle & vue)
<?php

require('model.php');
$posts = getPosts();
require('indexView.php');

?>

