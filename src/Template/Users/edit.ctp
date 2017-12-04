<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Tem certeza que deseja apagar ?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Nova despesa'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de despesas'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de produtos'), ['controller' => 'Products', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Perfil') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('username');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>