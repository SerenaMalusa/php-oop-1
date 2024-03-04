<tr>
    <th><?= $production->type ?></th>
    <td><?= $production->title ?></td>
    <td><?= $production->og_language ?></td>
    <td><?= $production->get_vote() ?></td>
    <td><?php echo ($production->is_best_seller) ? 'YES' : 'NO' ?></td>
</tr>