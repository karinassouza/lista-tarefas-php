# 📝 Lista de Tarefas em PHP

## 📌 Sobre o projeto

Este projeto foi desenvolvido como uma atividade acadêmica com o objetivo de aplicar, na prática, conceitos de PHP, principalmente funções e estruturas de repetição. A aplicação apresenta uma lista simples de tarefas, permitindo organizar e exibir as atividades cadastradas.

## ⚙️ Funcionalidades

- Exibição de uma lista de tarefas;
- Adição de uma nova tarefa por meio de uma função;
- Exibição das tarefas utilizando uma função;
- Percorrimento da lista utilizando `foreach`.

## 🔄 Estrutura de repetição

Foi utilizado o `foreach` para percorrer o array de tarefas e exibir cada tarefa na tela.

```php
foreach ($tarefas as $tarefa) {
    echo "<li>$tarefa</li>";
}# lista-tarefas-php
