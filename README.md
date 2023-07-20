## Desafio Desenvolvedor FULLSTACK Pleno - REVVO
 - Link com a descrição dos itens necessários no desafio - [Bitbucket] (https://bitbucket.org/leolearningbrasil/desafio-revvo/src/master/)
 - Desafio desenvolvido por [Sabino_Machado] (https://www.linkedin.com/in/sabino-machado/)
 - Variáveis PHP em camelCase.
 - Variáveis CSS em [BEM-like_Namikng] (https://cssguidelin.es/#naming-conventions
)
- Variáveis JS em camelCase.
- Utilizei a a biblioteca [PHP-DI] através do composer, para implementar a injeção de dependência e aplicar namespaces, aplicando a [PSR-4] (https://www.php-fig.org/psr/psr-4/)


## Project SETUP
- Install [Composer](https://getcomposer.org/download/)
- Install [NPM](https://www.npmjs.com/get-npm) - _nvm is recommended_
- Install mysql:5.7+
- Install PHP 7+
- Install Apache or Nginx


## CREATING DATABASE
COLOCAR OS CÓDIGO DA sql
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
 - Dont run tests on production database. Test create a fake data
 - use english on all, except frontend for show to users
 - Use Ident to spaces = 2 for coding
 - View CHANGELOG.md for versioning instructions
 - Dont use '12345' or 'admin' passwords 
 - Add csrf protection o internal requests
 - GIT: use dev brach for new features, hotfix to fast fixed. Master updates only merge dev or hotfixes. Periodically, update dev with hotfixes and hotfix with new devs