<div class="form-control">
    <?= $this->Form->create($product); ?>
    <fieldset>
        <legend><?= __('Adicionar Produto') ?></legend>
        <?php
            echo $this->Form->control('description',['class' => 'form-control']);
            echo $this->Form->control('valor',['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'form-control btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>