<div class="wrapper">
	<div class="gridForm left padding">
		<div class="container left padding">
	    	<div id="slides">
	        	<?php echo $this->Html->image('3D-Wallpaper-7.jpg',
					array(
						'alt'   => 'jobyou! Interligando Oportunidades',
						'title' => '3D-Wallpaper-7'
					)
				); ?>

	        	<?php echo $this->Html->image('free-art-wallpaper-3d-animal-wallpaper.jpg',
					array(
						'alt'   => 'jobyou! Interligando Oportunidades',
						'title' => '3d-animal-wallpaper'
					)
				); ?>
	    	</div>
	  	</div>

		<div class="add left padding">
			<h1 class="titleForm padding">Cadastre-se</h1>
			<?php
				echo $this->Form->create();

				echo $this->Form->hidden('User.pontos',
					array(
						'value' => 35
					)
				);

				echo $this->Form->hidden('User.status',
					array(
						'value' => 1
					)
				);

				echo $this->Form->radio('User.role',
					array(
						'fisica' => 'Pessoal Física',
						'juridica' => 'Pessoa Jurídica',
					),
					array(
						'legend' => false,
					)
				);

				echo $this->Form->input('User.username',
					array(
						'label' => 'Username<br/>',
					)
				);

				echo $this->Form->input('User.email',
					array(
						'type' => 'email',
						'label' => 'Email<br/>'
					)
				);

				echo $this->Form->input('User.password',
					array(
						'label' => 'Senha<br/>'
					)
				);

				echo $this->Form->end('Cadastrar');
			?>
		</div>

		<div class="login left padding">
			<h1 class="titleForm padding">Login</h1>

			<?php
				echo $this->Form->create(array('action' => 'login') );

				echo $this->Form->input('User.username',
					array( 'label' => 'Username<br/>' )
				);

				echo $this->Form->input('User.password',
					array( 'label' => 'Senha<br/>')
				);

				echo $this->Form->end('Entrar');
			?>
		</div>
	</div>
</div>

<div class="gridCarousel left">
	<section class="wrapper">
		<div class="parceiros left padding">
			<h1 class="titleForm txtGreen padding">Parceiros</h1>
			<div id="slider1">
				<a class="buttons prev" href="#">&#60;</a>
				<div class="viewport">
					<ul class="overview">
						<li>
							<?php echo $this->Html->link(
								$this->Html->image('3D-Wallpaper-7.jpg',
									array(
										'alt'   => 'jobyou! Interligando Oportunidades',
										'class' => 'imgParceiros'
									)
								),
								'http://www.okupo.com.br',
								array(
									'title' => 'teste link externo',
									'escape'=> false
								)
							); ?>

						</li>
						<li>
		        			<?php echo $this->Html->image('free-art-wallpaper-3d-animal-wallpaper.jpg',
								array(
									'alt'   => 'jobyou! Interligando Oportunidades',
									'title' => '3d-animal-wallpaper',
									'class' => 'imgParceiros'
								)
							); ?>
						</li>
					</ul>
				</div>
				<a class="buttons next" href="#">&#62;</a>
			</div>
		</div>
	</section>
</div>