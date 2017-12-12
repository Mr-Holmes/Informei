<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Perfil') ?></legend>
        <?php
            echo $this->Form->control('email',["class" => "form-control","disabled"]);
                echo $this->Form->control('username',["class" => "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),['class' => "form-control btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>