```html
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>

    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <main class="container">

        <!-- Cabeçalho -->
        <header class="cabecalho">
            <div>
                <h1>📝 Minhas Tarefas</h1>
                <p>Organize suas atividades de forma simples</p>
            </div>

            <div class="contador">
                <span>4</span>
                <small>tarefas</small>
            </div>
        </header>


        <!-- Campo para adicionar tarefa -->
        <section class="adicionar">
            <input 
                type="text" 
                placeholder="Adicione uma nova tarefa..."
            >

            <button type="button">
                + Adicionar
            </button>
        </section>


        <!-- Tarefas pendentes -->
        <section class="tarefas">
            <div class="titulo-secao">
                <h2>📋 Tarefas Pendentes</h2>
                <span>3</span>
            </div>

            <div class="lista">

                <div class="tarefa">
                    <div class="checkbox"></div>

                    <div class="informacao">
                        <h3>Estudar PHP</h3>
                        <p>Revisar funções e estruturas de repetição</p>
                    </div>
                </div>


                <div class="tarefa">
                    <div class="checkbox"></div>

                    <div class="informacao">
                        <h3>Fazer atividade da faculdade</h3>
                        <p>Finalizar o projeto da disciplina</p>
                    </div>
                </div>


                <div class="tarefa">
                    <div class="checkbox"></div>

                    <div class="informacao">
                        <h3>Enviar projeto no GitHub</h3>
                        <p>Verificar os arquivos antes de publicar</p>
                    </div>
                </div>

            </div>
        </section>


        <!-- Tarefas concluídas -->
        <section class="concluidas">

            <div class="titulo-secao">
                <h2>✅ Tarefas Concluídas</h2>
                <span>2</span>
            </div>

            <div class="lista">

                <div class="tarefa concluida">
                    <div class="checkbox marcado">✓</div>

                    <div class="informacao">
                        <h3>Criar a pasta do projeto</h3>
                        <p>Tarefa concluída</p>
                    </div>
                </div>


                <div class="tarefa concluida">
                    <div class="checkbox marcado">✓</div>

                    <div class="informacao">
                        <h3>Criar o arquivo HTML</h3>
                        <p>Tarefa concluída</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- Rodapé -->
        <footer>
            <p>Lista de Tarefas • Projeto em PHP</p>
        </footer>

    </main>

</body>

</html>
```
