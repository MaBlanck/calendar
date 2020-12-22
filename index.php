<?php require_once(__DIR__ . '/header.php') ?>
<h1>TP Partie 9</h1>
<form action="index.php" method="post" class="form">
    <fieldset>
        <legend>Calendrier</legend>
        <select name="month" id="month">
            <option value="january">Janvier</option>
            <option value="february">Février</option>
            <option value="march">Mars</option>
            <option value="april">Avril</option>
            <option value="may">Mai</option>
            <option value="june">Juin</option>
            <option value="july">Juillet</option>
            <option value="august">Août</option>
            <option value="september">Septembre</option>
            <option value="october">Octobre</option>
            <option value="november">Novembre</option>
            <option value="december">Décembre</option>
        </select>
        <select name="year" id="year">
            <?php
            for ($year = 1970; $year <= 2050; $year++) : ?>
                <option value="<?= $year ?>"><?= $year ?></option>
            <?php endfor; ?>
        </select>
        <input type="submit" value="Rechercher">
    </fieldset>
</form>
<?php if ($_POST) : ?>
    <?php require_once(__DIR__ . '/instructions.php') ?>
    <table>
        <caption class="titleCalendar"><?= ucwords($monthName) . ' ' . $year; ?></caption> 
        <tr class="days">
            <td>Lundi</td>
            <td>Mardi</td>
            <td>Mercredi</td>
            <td>Jeudi</td>
            <td>Vendredi</td>
            <td>Samedi</td>
            <td>Dimanche</td>
        </tr>
        <!--Boucle while pour gérer les cases blanches au début du mois-->
        <tr><?php while ($blank > 0) : ?>
                <td class="blank"></td>
                <?php $blank = $blank - 1;
                $day_count++; ?>
            <?php endwhile; ?>
            <?php $day_num = 1; ?>
            <!--compte le nombre de jour dans le mois et on affiche le numéro du jour du mois-->
            <?php while ($day_num <= $days_in_month) : ?>
                <td class="numOfDay"><?= $day_num ?></td>
                <?php $day_num++;
                $day_count++; ?>
                <!--On incrémente le compte des jours dans le mois-->
                <!--créé les lignes donc du nombre de semaines dans chaque mois-->
                <?php if ($day_count > 7) : ?>
                </tr>
                <tr>
        <?php $day_count = 1; ?>
        <!--On reprend le compte des jours à 1. -->
    <?php endif; ?>
<?php endwhile; ?>
<!-- On affiche des td vides si nécessaire à la fin ds semaines-->
<?php while ($day_count >= 1 && $day_count <= 7) : ?>
    <td class="blank"></td>
    <?php $day_count++ ?>
<?php endwhile; ?>
</tr>
    </table>
<?php endif; ?>
</body>

</html>