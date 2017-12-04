<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>
<div class="form-control">
    <div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Cadastro') ?></legend>
            <?php
                echo $this->Form->control('email',['class' => 'form-control']);
                echo $this->Form->control('password',['class' => 'form-control']);
                echo $this->Form->control('username',['class' => 'form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar'),['class' => 'form-control btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>