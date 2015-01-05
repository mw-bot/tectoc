<?php if (!empty($data)): ?>
    <table width="100%" border="0">
        <thead>
        <tr>
            <th scope="col">Model</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">kW</th>
            <th scope="col">HP</th>
            <th scope="col">cc</th>
            <th scope="col">body</th>
        </tr>
        </thead>
        <?php foreach ($data as $item): ?>
            <tr>
                <td>
                    <a href="<?php print content_link(); ?>?typ=<?php print $item['ID'] ?>"><?php print $item['F1'] ?>
                    </a></td>
                <td>
                    <?php print $item['F2'] ?>
                </td>
                <td>
                    <?php print $item['F3'] ?>

                </td>
                <td>
                    <?php print $item['F4'] ?>

                </td>
                <td>
                    <?php print $item['F5'] ?>

                </td>
                <td>
                    <?php print $item['F6'] ?>
                </td>
                <td>
                    <?php print $item['F7'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif ?>