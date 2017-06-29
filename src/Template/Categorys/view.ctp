<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="animalCommons view large-9 medium-8 columns content">
    <h3><?= h($category['categoryname']) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= h($category['categoryname']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Description') ?></th>
            <td><?= h($category['categorydescription']) ?></td>
        </tr>
    </table>
</div>
