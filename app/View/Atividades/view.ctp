<div class="atividades view">
<h2><?php echo __('Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atividade['User']['id'], array('controller' => 'users', 'action' => 'view', $atividade['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['mensagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Imagem'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['url_imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['url_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Link'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['url_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Publicacao'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['status_publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publicar Em'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['publicar_em']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atividade'), array('action' => 'edit', $atividade['Atividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Atividade'), array('action' => 'delete', $atividade['Atividade']['id']), array(), __('Are you sure you want to delete # %s?', $atividade['Atividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
