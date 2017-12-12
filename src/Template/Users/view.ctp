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
            <th scope="row"><?= __('Nome de usuário') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= $this->Html->link(__('Relatorio de Despesas'), ['controller' => 'Expenses', 'action' => 'add'])?></h4>
        <?php if (!empty($user->expenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>

            
            <?php foreach ($user->expenses as $expenses): ?>
            <tr>
                <td><?= h($expenses->description) ?></td>
                <td><?= h($expenses->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar | '), ['controller' => 'Expenses', 'action' => 'view', $expenses->id]) ?>
                    <?= $this->Html->link(__('Editar | '), ['controller' => 'Expenses', 'action' => 'edit', $expenses->id]) ?>
                    <?= $this->Form->postLink(__('Deletar | '), ['controller' => 'Expenses', 'action' => 'delete', $expenses->id], ['confirm' => __('Tem certeza que deseja apagar ?', $expenses->id)]) ?>
                    <?= $this->Html->link(__('Nova Despesa'), ['controller' => 'Expenses', 'action' => 'add']) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= $this->Html->link(__('Relatorio de Produtos'),['controller' => 'Products','action' => 'add'])?></h4>
        <?php if (!empty($user->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->products as $products): ?>
            <tr>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar | '), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Editar | '), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Deletar | '), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Tem certeza que deseja apagar ?', $products->id)]) ?>
                    <?= $this->Html->link(__('Novo Produto'), ['controller' => 'Products', 'action' => 'add']) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>