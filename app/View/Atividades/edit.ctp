<div class="atividades form">
<?php echo $this->Form->create('Atividade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Atividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('mensagem');
		echo $this->Form->input('url_imagem');
		echo $this->Form->input('url_video');
		echo $this->Form->input('url_link');
		echo $this->Form->input('status_publicacao');
		echo $this->Form->input('publicar_em');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Atividade.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Atividade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
