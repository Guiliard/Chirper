<h1 align="center">Chirper</h1>
<div style="display: inline-block;">
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white>
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white>
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white>
<img align="center" height="20px" width="90px" src="https://img.shields.io/badge/Made%20for-VSCode-1f425f.svg"/> 
<img align="center" height="20px" width="90px" src="https://img.shields.io/badge/Contributions-welcome-brightgreen.svg?style=flat"/>
</div>
<br>

## Chirper

Chirper é um aplicativo simples desenvolvido em Laravel utilizando Livewire, seguindo as instruções do [Laravel Bootcamp](https://bootcamp.laravel.com/livewire/installation). Este projeto demonstra funcionalidades essenciais de um microblog, onde os usuários podem criar, visualizar, editar e deletar "chirps" (mensagens curtas). As notificações e eventos são registrados em um arquivo de log (`storage/logs/laravel.log`) e são disparados apenas quando um novo chirp é criado. Para testar essa funcionalidade, certifique-se de utilizar pelo menos duas contas de usuário.

## Requisitos

- PHP >= 8.0
- [Composer](https://getcomposer.org/)
- Node.js e NPM (para gerenciamento e compilação dos assets)
- Banco de dados (MySQL, PostgreSQL, etc.)

## Instalação

1. **Clone o repositório:**
    ```bash
    git clone https://github.com/Guiliard/Chirper.git
    ```

2. **Instale as dependências:**
    ```bash
    composer install
    npm install
    ```

3. **Copie o arquivo `.env.exemple` e configure o arquivo `.env` com as credenciais do banco de dados e o log de notificações.**
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=porta_do_banco
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```
    ```bash
    MAIL_MAILER=log
    ```

4. **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

5. **Execute as migrations:**
   ```bash
   php artisan migrate
   ```

6. **Compile os assetes:**
   ```bash
   npm run dev
   ```

7. **Inicie o Worker da Queue (processa os jobs enfileirados pela aplicação)**
    ```bash
    php artisan queue:work
    ```

8. **Inicie o servidor:**
   ```bash
   php artisan serve
   ```

9. **Acesse no navegador:**
   ```bash
   http://localhost:8000
   ```

## Especificações do Dispositivo Utilizado

| Componentes            | Detalhes                                                                                         |
| -----------------------| -----------------------------------------------------------------------------------------------  |
|  `Processador`         | Intel(R) Core(TM) i7-1065G7 CPU @ 1.30GHz   1.50 GHz                                             |
|  `RAM Instalada`       | 12.0 GB (Utilizável: 11.8 GB)                                                                    |
|  `Tipo de Sistema`     | Sistema Operacional de 64 bits, processador baseado em x64                                       |
|  `Sistema Operacional` | Linux Pop!_OS 22.04 LTS                                                                           |

## Referências

[1] LARAVEL BOOTCAMP - Tutorial Laravel Bootcamp (Livewire). Disponível em: <https://bootcamp.laravel.com/livewire/installation>. Acessado em: 05 de Fevereiro de 2025.

[2] LARAVEL - Laravel Documentation. Disponível em: <https://laravel.com/docs/11.x/readme>. Acessado em: 05 de Fevereiro de 2025.

[3] PHP - PHP Documentation. Disponível em: <https://www.php.net/docs.php>. Acessado em: 28 de Janeiro de 2025.

[4] MySQL - MySQL Documentation. Disponível em: <https://dev.mysql.com/doc/>. Acessado em: 28 de Janeiro de 2025.