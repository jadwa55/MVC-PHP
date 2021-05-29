<!-- //vue affiche les informations  -->

<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<!-- //la fonction ob_start() "mémorise" toute la sortie HTML qui suit, puis, à la fin, on récupère le contenu généré avec ob_get_clean() (ligne 30) et on met le tout dans $content . -->
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="post.php?id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
