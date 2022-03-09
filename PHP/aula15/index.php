<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <div id="container">
        <div id="topo">
           
        <div id="logo">
                <a href="index.php">
                    <img src="img/chevroletLogo.png" alt="logotipo do Site"/>
                </a>
            </div>
            <div id="menu">
                <a href="#"> Home</a>
                <a href="#"> Quem Somos</a>
                <a href="#"> Serviços</a>
                <a href="#"> Contato</a>
            </div>
        </div> <!--fecha o topo-->
        <div id="banner">
                <img src="img/FabricaGM.jpeg" 
                alt="banner do site" title="é uma legenda para você" width="980px"/>        
        </div>
        <div id="destaque">
            <h1>Chevrolet é um fabricante de veículos motorizados
                 norte-americano fundado em 1911 por Louis Chevrolet e 
                 que pertence à General Motors juntamente com Cadillac, 
                 Buick, GMC, Holden, Pontiac e antigos proprietários das 
                 marcas Opel e Vauxhall, ex-fabricantes da marca na Europa.</h1>
            <h2>Fulano de tal</h2>
        </div>
        <div id="conteudo">
            <h1>Novo Artigo</h1>
            <form action="cadastrarArtigo.php" method="POST" enctype="multipart/form-data">
                Título.:<br/>
                <input type="text" name="titulo" placeholder="digite o título"/>
                <br/>
                Artigo.:<br/>
                <input type="text" name="artigo" placeholder="digite a mensagem do artigo"/>
                <br/>
                Imagem.:<br/>
                <input type="file" name="imagem" placeholder="buscar imagem"/>
                <br/>
                Categoria.:<br/>
                <select name="categoria">
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="rede">Rede</option>
                    <option value="moveis">Dispositivo móveis</option>
                </select>    
                <br/>
                <input type="submit" value="Cadastrar Artigo"/>
                <input type="reset" value="Limpar Artigo"/>
            </form>
        </div>
    </div> <!--Termina a divisão do container-->
</body>
</html>

