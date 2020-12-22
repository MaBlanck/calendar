<?php require_once(__DIR__ . '/instructions.php') ?>
<?php require_once(__DIR__ . '/header.php') ?>
<table>
    <tr>
        <th class="titleCalendar"><?= $monthName . ' ' . $year; ?></th>
    </tr>
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
            <!--On incrémente le copte des jours dans le mois-->
            <!--créé les lignes donc du nombre de semaines dans chaque mois-->
            <?php if ($day_count > 7) : ?>
            <tr>
            </tr>
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
</body>

</html>