<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<div class="card" style="width:30rem">
		<div class="container">
	 		<div class="card-body">
	 			<?= $this->Html->image('logo.png') ?>
				<div class="Form-control">
					<?= $this->Flash->render('auth') ?>
					<?= $this->Form->create() ?>
					<fieldset>
						<legend><?= __('Login:') ?></legend>
						<?= $this->Form->control('username',['class' => 'form-control','data-toggle' => 'tooltip','data-placement' => 'top','title' => 'Nome do Usuario']) ?>
						<?= $this->Form->control('password',['class' => 'form-control','data-toggle' => 'tooltip','data-placement' => 'top','title' => 'Senha']) ?>
						
					</fieldset>
							<?= $this->Form->button(__('Login'),['class' => 'form-control btn btn-primary']); ?>
							<br><br>
					<?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">

    .card {
    width: 100%;
    padding-right: inherit;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 40px;
	}

</style>