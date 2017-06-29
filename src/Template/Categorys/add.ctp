<div class="categoryform">
<?php   $attributes = array('id' => 'Categorys','novalidate' => 'novalidate'); ?>
<?= $this->Form->create($Category,$attributes) ?>

    <ul style="list-style-type:none">
        <li>
        <?=
        $this->Form->input('categoryname',['label' => [false,'class'=>'displayNone'],'type'=>'text'])
        ?>
        </li>
        <li>
            <?=
            $this->Form->input('categorydescription',['label' => [false,'class'=>'displayNone'],'type'=>'textarea'])
            ?>
        </li>
        <li>
            <div class="submitBtn">
            <input name="submit" type="submit" value="<?= __('Submit') ?>">
            <?= $this->Html->link(
            __('Reset'),
            ['controller'=>'Categorys', 'action'=>'add'],['class'=>'cancelbtn']
            ); ?>
            </div>
        </li>
    </ul>
<?= $this->Form->end() ?>
</div>

<?php echo $this->Html->script('jquery-min.js'); ?>
<div class="states index large-9 medium-8 columns content">
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col" class="rawmaterial"><?= 'Sr.No'; ?></th>
<th scope="col" class="rawmaterial"><?= 'categoryname'; ?></th>
<th scope="col" class="rawmaterial"><?= 'categorydescription'; ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php
$sr_no = 0;
foreach ($Categorys as $category):
?>
<tr>
<td><?= ++$sr_no; ?></td>
<td><?= h($category['categoryname']) ?></td>
<td><?= h($category['categorydescription']) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $category['id']],['class'=>'viewIcon']) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $category['id']],['class'=>'editButton']) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category['id']], ['confirm' => __('Are you sure you want to delete # {0}?', $category['id']),'class'=>'deleteButton']) ?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
