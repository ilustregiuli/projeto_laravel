

## Projeto com Laravel - (site: listas TOP TEN)

O objetivo desse projeto é criar um site de lista de "TOP TEN", onde o usuário cadastra a sua lista e ordena os itens conforme seu gosto pessoal. Após isso, pode compartilhar essa lista para que outras pessoas vejam.

Exemplo: 

### Meus TOP TEN Livros:

- 1 Moby Dick
- 2 O Fantasma da Ópera
- 3 O Médico e o Monstro
(...segue até 10)

### Minhas TOP TEN músicas:

- 1 Thriller - Michael Jackson
- 2 Titanic - Celine Dion
- 3 Florentina - Tiritica
(...segue até 10)

## Requisitos

Na tela inicial, terá três botões: **Home, Entrar e Cadastrar**.

**Home:** serve para voltar a qualquer momento para tela inicial.

**Entrar:** usuário é encaminhado para página de login.

**Cadastrar:** usuário que não tem login ainda no sistema.

## Passo-a-Passo

- Criar rota: `Route::método(get,post,resource)('/rota', 'NomeDoController@funçãoDoController')`
- Views: criar na pasta `\resources\views`
- Todas as views extender `('index')`


## Evolução

Projeto criado com Laravel.

Após isso, fiz a definição de uma rota padrão (/) no arquivo `\routes\web.php.` Esse caminho executa uma função anônima e retorna uma execução do método "view", que devolve o arquivo `\resources\views\index.blade.php.`

O arquivo  `\resources\views\index.blade.php.` é uma view que contém o código padrão para todas outras páginas. Cada página que for adicionada, recebe o recurso do blade `@extends('index')`, que importa essa view para todas as páginas.

Criei a rota `/cadastrar`, que chama o controller e utiliza o método para devolver a view "cadastro".

A view "cadastro" recebe do método `cadastrarUser` um parâmetro `$nome`, somente para testar o envio de parâmetros request-view. Ela recebe esse parâmetro, extende a view "index" e apresenta na tela a variável `$nome`, enviada por parâmetro.




