<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $expense->id],
                ['confirm' => __('Tem certeza que deseja apagar ?', $expense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Despesas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="expenses form large-9 medium-8 columns content">
    <?= $this->Form->create($expense) ?>
    <fieldset>
        <legend><?= __('Editar Despesa') ?></legend>
        <?php
            echo $this->Form->control('Descrição');
            echo $this->Form->control('Valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
