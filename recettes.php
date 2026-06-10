<?php require_once 'data/recettes.php'; ?>
<?php include_once 'includes/header.php'; ?>
<section class="main">
    <?php include_once 'includes/menu.php'; ?>

    <section class="main__recettes">
        <h2 class="recettes__titre">Liste des recettes</h2>

        <table class="recettes__table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Temps</th>
                    <th>Difficulté</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($recettes as $recette): ?>
                    <tr>
                        <td><?= $recette['titre'] ?></td>
                        <td><?= $recette['temps'] ?></td>
                        <td><?= $recette['difficulte'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>

<?php include_once 'includes/footer.php'; ?>