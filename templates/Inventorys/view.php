<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inventorys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventorys view content">
            <h3><?= h($inventory->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Part Num') ?></th>
                    <td><?= h($inventory->part_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($inventory->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condition') ?></th>
                    <td><?= h($inventory->condition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= h($inventory->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($inventory->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
