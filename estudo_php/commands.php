<?php
    /**
     * @author: Jonathan Albert Santos Carvalho
     * comentário: aqui vamos anotar todos os comando do php artisan.
     */

    class ArtisanCommands
    {
        private $commands = [
            'list' => 'List all available commands / Lista todos os comandos disponíveis',
            'help' => 'Display help for a command / Exibe ajuda para um comando',
            'migrate' => 'Run the database migrations / Executa as migrações do banco de dados',
            'db:seed' => 'Seed the database with records / Popula o banco de dados com registros',
            'make:controller' => 'Create a new controller class / Cria uma nova classe de controlador',
            'make:model' => 'Create a new Eloquent model class / Cria uma nova classe de modelo Eloquent',
            'make:migration' => 'Create a new migration file / Cria um novo arquivo de migração',
            'route:list' => 'List all registered routes / Lista todas as rotas registradas',
            'config:cache' => 'Create a cache file for faster configuration loading / Cria um arquivo de cache para carregamento mais rápido da configuração',
            'cache:clear' => 'Flush the application cache / Limpa o cache da aplicação',
        ];

        public function showCommands()
        {
            foreach ($this->commands as $command => $description) {
                echo "Command: {$command} - Description: {$description}" . PHP_EOL;
            }
        }
    }

    $artisanCommands = new ArtisanCommands();
    $artisanCommands->showCommands();
