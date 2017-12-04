<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense[]|\Cake\Collection\CollectionInterface $expenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova Despesa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuário'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expenses index large-9 medium-8 columns content">
    <h3><?= __('Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
            <tr>
                <td><?= h($expense->description) ?></td>
                <td><?= $this->Number->format($expense->valor) ?></td>
                <td><?= $expense->has('user') ? $this->Html->link($expense->user->username, ['controller' => 'Users', 'action' => 'view', $expense->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $expense->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $expense->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $expense->id], ['confirm' => __('Tem certeza que deseja apagar ?', $expense->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anteior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>