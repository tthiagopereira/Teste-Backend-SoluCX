# Lumen PHP Teste
# API Documentação Solucx
* Recomendado usar POSTMAN
* https://documenter.getpostman.com/view/4150779/TWDdhsqB
#Usar o Docker
* git clone https://github.com/tthiagopereira/Teste-Backend-SoluCX.git

* cd Teste-Backend-SoluCX/
* cp .env.example .env

* nano .env


* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3307
* DB_DATABASE=solucx
* DB_USERNAME=root
* DB_PASSWORD=root


* Entre na pasta laradock
* e use o seguinte comando


* sudo docker-compose up -d nginx mysql phpmyadmin
* sudo docker-compose exec --user-laradock worlspace bash

# Criar banco de dados

create database solucx;

# Baixa Projeto

git clone https://github.com/tthiagopereira/Teste-Backend-SoluCX.git

* cd Teste-Backend-SoluCX/
* cp .env.example .env

# Configurar arquivo .env

De

* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=NOME DO BANCO DE DADOS
* DB_USERNAME=USUÁRIO DO BANCO DE DADOS
* DB_PASSWORD=SENHA DO BANCO DE DADOS

# Instalar as dependencias

composer install

# Criar as migrações

php artisan migrate

# Iniciar o servidor inbutido 

php -S localhost:8000 -t public
