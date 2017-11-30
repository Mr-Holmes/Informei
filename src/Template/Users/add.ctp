<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="form-control">
    <div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
                echo $this->Form->control('email',['class' => 'form-control','placheholder' => 'Insira seu E-mail valído']);
                echo $this->Form->control('password',['class' => 'form-control']);
                echo $this->Form->control('username',['class' => 'form-control','placheholder' => "Insira o nome do usúario "]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class' => 'form-control btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
