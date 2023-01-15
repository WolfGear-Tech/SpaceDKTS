# AMLDD

Parabéns! Você foi aprovado para a próxima fase deste processo seletivo!

Nesta próxima fase a ideia é entender seu conhecimento com a nossa Stack. Para facilitar o processo, iremos usar alguns artifícios...
Usaremos o [Json Server](https://www.npmjs.com/package/json-server#getting-started) para criar uma API REST basado em um arquivo JSON - este arquivo é uma versão da chamada de Espaçonaves do Star Wars disponibilizado pela [API SWAPI](https://swapi.dev/documentation#starships) - a modelagem está neste link.

Para instalar o JSON Server utilize 
~~~
npm install -g json-server
~~~

Para iniciar a API utilize o seguinte comando.
~~~
json-server --watch db.json
~~~

## Desafio CRUD
O seu desafio é criar as quatro operações do CRUD (create, read, update e delete) com PHP.
Você tem toda a liberdade de modelar a arquitetura e a solução da maneira que vc achar mais interessante.

Neste desafio, você precisará:
 - Criar uma tela de listagem das espaçonaves, com pelo menos o Nome, Fabricante e Preço - além das operações (visualizar, editar, deletar);
 - Criar uma tela de visualização da espaçonave com TODAS as informações disponíveis do cadastro;
 - Na tela de visualização, é importante que exista explicações para cada um dos atributos (isso está naquele link informado);
 - Criar uma tela de adição / edição para fazer os ajustes. Lembrando que as requisições de adição e edição são diferentes ;)
 - Criar funcionalidades para exclusão de registro.

Vc recebeu este ZIP com essas informações e o arquivo da API. O retorno aguardado é neste mesmo ZIP com os arquivos do projeto em PHP finalizados. Se você tiver alguma dúvida, por favor, nos acione :)