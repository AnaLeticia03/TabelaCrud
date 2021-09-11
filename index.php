<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section id="direita">
        <form>
            <h2>Cadastrar Pessoa</h2>
            <label for="nome"> Nome </label>
            <input type="text" name="nome" id="nome">
            <label for="telefone"> Telefone </label>
            <input type="tel" name="telefone" id="telefone">
            <label for="email"> Email </label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Cadastrar">
        </form>
    </section>
    <section id="esquerda">
        <table id="table">
            <tr id="titulo">
                <td>NOME</td>
                <td>TELEFONE</td>
                <td>EMAIL</td>
            </tr>
            <tr>
                <td>Maria </td>
                <td>000000</td>
                <td colspan="2"> maria@gmail.com</td>
                <td><a href=""> Editar</a><a href="">Excluir</a> </td>
            </tr>
            <tr>
                <td>Daniel Sávio</td>
                <td>123456</td>
                <td colspan="2"> maria@gmail.com</td>
                <td><a href=""> Editar</a><a href="">Excluir</a> </td>
            </tr>
        </table>

    </section>

</body>

</html>