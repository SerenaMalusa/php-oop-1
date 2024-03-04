<tr>
    <td><?php echo get_class($production->type) ?></td>
    <td><?= $production->title ?></td>
    <td><?= $production->og_language ?></td>
    <td>
        <?php if (get_class($production->type) == 'Movie') { ?>
            <?= $production->type->duration ?> min
        <?php } elseif (get_class($production->type) == 'Serie') { ?>
            <?= $production->type->seasons ?> seasons
        <?php } ?>
    </td>
    <td>
        <?php if (get_class($production->type) == 'Movie') { ?>
            <?= $production->type->release_date ?>
        <?php } elseif (get_class($production->type) == 'Serie') { ?>
            <?= $production->type->first_air_date ?>
        <?php } ?>
    </td>
    <td><?= $production->genre->name ?></td>
    <td><?= $production->get_vote() ?></td>
    <td><?php echo ($production->is_best_seller) ? 'YES' : 'NO' ?></td>
</tr>