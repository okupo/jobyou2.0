<?php
/**
 *
 *
 * @copyright     Copyright (c) Okupo Soluções Profissionais LTDA
 * @link          http://okupo.com.br
 * @package       app.View.Layouts
 * @since         jobyou v 2.0
 */

$OkupoDescription = 'jobyou!';

echo $this->Html->docType('html5');
?>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $OkupoDescription." | ". $title_for_layout; ?>
		</title>

		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css(array('okupo.jobyou', 'tinycarousel', 'slider'));

			echo $this->Html->script(array('jquery-2.1.1.min', 'jquery-2.1.1.min.map', 'okupo.jobyou', 'jquery.tinycarousel.min', 'jquery.slides.min'));

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="header">
			<div class="wrapper">
				<div id="gridLogo">
					<?php echo $this->Html->image('logo.png',
					array(
						'class' => 'logo',
						'alt'   => 'jobyou! Interligando Oportunidades',
						'url'   => array('controller' => 'usuarios', 'action' => 'index'),
						'title' => 'Interligando Oportunidades!'
					) ); ?>
				</div>

				<?php echo $this->Html->div('bgOrange txtWhite', 'A maior comunidade online brasileira!', array('id' => 'slogan')); ?>
			</div>
		</div>

		<?php
			echo $this->Session->flash();
			echo $this->fetch('content');
		?>

		<div id="footer" class="bgGreen">
			<div class="wrapper">
				<div id="centerFooter">
					<?php
						echo $this->Html->image('icon.jobyou.png',
							array(
								'class' => 'iconJob',
								'alt'   => 'icon jobyou'
							)
						);
					?>

					<div id="copyright">versão 2.0 . &copy;&ensp;<?php echo date('Y'); ?> . Okupo Soluções Profissionais . todos os direitos reservados</div>

					<div class="info">
						<?php echo $this->Html->link('Sobre |', array('controller' => 'informacoes', 'action' => 'sobre')); ?>
					</div>

					<div class="info">
						<?php echo $this->Html->link('O que é? |', array('controller' => 'informacoes', 'action' => 'oquee')); ?>
					</div>

					<div class="info">
						 <?php echo $this->Html->link('Termos de uso', array('controller' => 'informacoes', 'action' => 'termosdeuso' )); ?>
					</div>
				</div>
			</div>
		</div>
		<?php echo $this->Js->writeBuffer(); // note: write cached scripts ?>
	</body>
</html>
