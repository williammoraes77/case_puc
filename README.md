# :rocket: Sobre o projeto

Esse projeto foi desenvolvido com a finalidade de um teste.

# 🤔 Como excutar

### Dependencias do projeto:

-   Utiliza [Laravel](https://laravel.com/) como framework.
-   A versao do Laravel utilizada nesse projeto é a 9.19.

para rodar o projeto você deve garantir que sua máquina local tenha o [PHP](https://www.php.net/manual/pt_BR/install.php) e o [composer](https://getcomposer.org/) instalados. Se você estiver desenvolvendo no macOS, o PHP e o Composer podem ser instalados via [Homebrew](https://brew.sh/) . Além disso, é recomendado instalar o [Node e o NPM ](https://nodejs.org/en/)

### Passo 1: Faça o clone ou download do projeto:

```sh
git clone https://github.com/williammoraes77/marvel-app-test.git
```

### Passo 2: Através do terminal acesse a pasta raiz do projeto e faça o download das dependências:

#### Usando composer

```sh
composer install
```

### Passo 3: Configurando o arquivo .env:

-   Crie e configure o arquivo `.env` conforme sua ferramenta de banco de dados

### Passo 4: gerar as tabelas no DB

```sh
php artisan key:generate

php artisan config:cache

php artisan migrate
```

### Passo 5: Executando os projetos no navegador:

```sh
php artisan serve
```

### Passo 6: Abra o navegador e acesse o localhost

-   Geralmente é `http://127.0.0.1:8000/` mas verifique pelo terminal

Desenvolvido com ❤️ por Raquel Moraes 🚀
