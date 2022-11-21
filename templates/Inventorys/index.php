<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inventory> $inventorys
 */
?>
<div class="inventorys index content">
    <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventorys') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('part_num') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('condition') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventorys as $inventory): ?>
                <tr>
                    <td><?= $this->Number->format($inventory->ID) ?></td>
                    <td><?= h($inventory->part_num) ?></td>
                    <td><?= h($inventory->description) ?></td>
                    <td><?= h($inventory->condition) ?></td>
                    <td><?= h($inventory->price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
