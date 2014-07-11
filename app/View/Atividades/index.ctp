<?php
    //$userid = '1';
    $userid = $this->Session->read('Auth.User.id');
    //$userid = $this->Auth->User('id');
    //echo $this->session->flash();
?>
<p>Feed de notícias</p>
<div class = "post">
    <?php
        echo "Deseja postar algo novo, Usuário?<BR>";
    ?>
    <div class = "media">
        <?php	
            echo $this->Form->input('Imagem', array('type' => 'button',  'label' => '', 'div' => ''));
            echo $this->Form->input('Video', array('type'  => 'button',  'label' => '', 'div' => ''));
            echo $this->Form->input('Link', array('type'   => 'button',  'label' => '', 'div' => ''));
        ?>
    </div>
    <?php
        echo $this->Form->create('Atividade', array('action' => 'postar'));
        echo $this->Form->input('link', array('type' => 'text', 'label' => 'Link:<BR>', 'div' => '', 'class' => 'txtLink'));
        echo "  ";
        echo $this->Form->button('Visualização', array('type' => 'button', 'label' => '', 'div' => ''));
        echo $this->Form->input('mensagem', array('type' => 'textarea', 'label' => '<BR>', 'class' => 'txtPost'));
        echo $this->Form->input('publicar_em', array('options' => array(1, 2, 3, 4, 5), 'empty' => 'Meu perfil', 'label' => 'Publicar em: ', 'div' => ''));
        echo $this->Form->input('status_publicacao', array('options' => array('Amigos', 'Amigos exceto conhecidos', 'Apenas citados', 'Somente eu'), 'empty' => 'Público', 'label' => 'Status: ', 'div' => ''));
        echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => "$userid"));
        echo $this->Form->input('created', array('type' => 'hidden', 'value' => date('Y/m/d H:i:s')));
        echo $this->Form->end('Publicar', array('div' => 'submit'));
    ?>
</div>
<div class = "atividades">
    <?php foreach ($atividades as $atividade): ?>
        <div id = <?php echo "atividade-" . $atividade['Atividade']['id']; ?>>
            <?php 	
                echo $this->Html->image($atividade['Usuario']['avatar'], array('alt' => $atividade['Fisica']['name'], 'class' => 'imgAtividade', 'div' => ''));
                if($atividade['Usuario']['role'] == "juridica"):
                    echo $atividade['Juridica']['nome_contato'] . " publicou uma atividade no dia ";
                else:
                    echo $atividade['Fisica']['name'] . " publicou uma atividade no dia ";    
                endif;
                echo date("d/m/Y H:i:s", strtotime($atividade['Atividade']['created'])); 
                echo "<BR><BR>";
                echo $atividade['Atividade']['mensagem'];
                echo "<BR><BR>";
                echo $this->Form->postButton('Comentar', array('div' => '', 'action' => 'comentar', $atividade['Atividade']['id']));
                echo $this->Form->postButton('Favorito', array('div' => '', 'action' => 'favoritar', $atividade['Atividade']['id']));
                echo $this->Form->postButton('Compartilhar', array('div' => '', 'action' => 'compartilhar', $atividade['Atividade']['id']));
                if($atividade['Atividade']['user_id'] == $userid):
                    echo $this->Form->postButton('Excluir', array('div'      => '', 'action' => 'excluir', $atividade['Atividade']['id']), array('confirm' => 'Are you sure?'));
                endif;
                echo "<BR>";
            ?>
        </div>
    <?php endforeach; ?>
</div>
