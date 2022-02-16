<?php include_once 'topo.php'; //A diferença desse para o include é que só carrega 1x vez ?>

<h3>Novo Produto</h3>
<form action="cadastrar.php" method="post">
    Nome.:<br>
    <input type="text" name="nome" id="nome"/>
    <br>
    Estoque.:<br>
    <input type="text" name="estoque" id="estoque"/>
    <br>
    Valor.:<br>
    <input type="text" name="valor" id="valor"/>
    <br>
    Categoria.:<br/>
    <select name="categoria" id="categoria">
        <option value="">Selecione</option>
        <option value="eletronico">ELETRÔNICO</option>
        <option value="roupa">ROUPAS</option>
        <option value="brinquedo">BRINQUEDO</option>
        <option value="casa">CASA</option>
    </select>
</br>
</br>

<input type="submit" value="Cadastrar Produto"/>
<input type="reset" value="Limpar Campos"/>
</form>

<?php include_once 'rodape.php'; ?>
