
<?php

include('verificaLogin.php');

echo"
<ul>
        <li><a class='active' href='#home'> Olá, $_SESSION[nome] </a></li>
        <li><a class='activeBlack' href='painel.php'>Produtos</a></li>
        <li><a class='activeBlack' href='cadastroProduto.php'>Cadastro de produtos</a></li>
        <li style='float:right'><a class='Exit' href='logout.php'>Sair</a></li>
    </ul>";

    
    echo " <div class='footer'>
        <p>Development by Gustavo - Hora: <label id='data-hora'></label> </p>
    </div>";
        ?>
    
  




