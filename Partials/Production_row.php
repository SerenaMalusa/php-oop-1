<tr>
    <td><?= $production->title ?></td>
    <td><?= $production->og_language ?></td>
    <td>
        <?php if ($production instanceof Movie) { ?>
            <?= $production->get_duration() ?> min
        <?php } elseif ($production instanceof Serie) { ?>
            <?= $production->get_seasons() ?> seasons
        <?php } ?>
    </td>
    <td><?= $production->get_first_air_date() ?></td>
    <td>
        <?php foreach ($production->genres as $index => $genre) : ?>
            <?php echo ($index == count($production->genres) - 1) ? $genre->name : $genre->name . '-' ?>
        <?php endforeach; ?>
    </td>
    <td><?= $production->get_vote() ?></td>
    <td><?= ($production->is_best_seller) ? 'YES' : 'NO' ?></td>
    <td><?= get_class($production) ?></td>
    <?php if ($production instanceof Movie) { ?>
        <td><?= $production->get_profits() ?> $</td>
    <?php } else { ?>
        <td> </td>
    <?php } ?>
</tr>