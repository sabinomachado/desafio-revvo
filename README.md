## Challenger Desenvolvedor FULLSTACK Pleno - REVVO
 - Link com a descrição dos itens necessários no desafio - [Bitbucket](https://bitbucket.org/leolearningbrasil/desafio-revvo/src/master/)
 - Desafio desenvolvido por [Sabino Machado](https://www.linkedin.com/in/sabino-machado/)
 - Variáveis PHP em camelCase.
 - Variáveis CSS em [BEM-like_Naming](https://cssguidelin.es/#naming-conventions
)
- Variáveis JS em camelCase.
- Utilizei a a biblioteca [PHP-DI] através do composer, para implementar a injeção de dependência e aplicar namespaces, aplicando a [PSR-4](https://www.php-fig.org/psr/psr-4/)

## About Project & Developer
 [Vídeo Explicativo](https://www.youtube.com/watch?v=WXxSuzWteVQ)


## Project SETUP
- Install [Composer](https://getcomposer.org/download/)
- Install [NPM](https://www.npmjs.com/get-npm)

- Install XAMP/WAMP/LAMP 
    OR
    - Install mysql:5.7+
    - Install PHP 7+
    - Install Apache or Nginx


## CREATING DATABASE
CREATE DATABASE desafio_revvo;

CREATE TABLE courses (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    summary VARCHAR(100) NOT NULL,
    link VARCHAR(50) NOT NULL,
    url_image VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    deletado BOOLEAN NULL DEFAULT 0,
    PRIMARY KEY (id)
);

``

## Install instructions'
- Clone project
- Run `composer install`
- Run `npm install`
- Create a empty database
- Create .env based on .env.example
- Run `php -S localhost:8000 -t public`
- Run locally `localhost:8000`
``

## Update isntructions
- Run `git pull` for update project
- Run `composer update` for update dependencies
- Run `php -S localhost:8000 -t public`
- Run locally `localhost:8000`

# Other Instructions
 - Use english on all, except frontend for show to users
 - Use Ident to spaces = 2 for coding
 - GIT: use dev brach for new features, hotfix to fast fixed. Master updates only merge dev or hotfixes. Periodically, update dev with hotfixes and hotfix with new devs