<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Expenses') ?></h4>
        <?php if (!empty($user->expenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>

            
            <?php foreach ($user->expenses as $expenses): ?>
            <tr>
                <td><?= h($expenses->description) ?></td>
                <td><?= h($expenses->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Expenses', 'action' => 'view', $expenses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Expenses', 'action' => 'edit', $expenses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expenses', 'action' => 'delete', $expenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenses->id)]) ?>
                    <?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($user->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->products as $products): ?>
            <tr>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                    <?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
