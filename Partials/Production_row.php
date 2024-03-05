<tr>

    <td><?= $production->title ?></td>
    <td><?= $production->og_language ?></td>


    <td><?= $production->genre->name ?></td>
    <td><?= $production->get_vote() ?></td>
    <td><?= ($production->is_best_seller) ? 'YES' : 'NO' ?></td>
</tr>