# Template WordPress

## Minimum Required to run this project
- PHP >=8.1
- composer >=2.2
- node >=14

## Using this template in new projects
To start a new project using this template:
- Create the Group using Client name
- Create a blank project with a blank README
- Clone the new project in your local
- Clone this template project in your local, or pull the master to ensure you get the latest version
- Copy all files and folders (except /.git) from this project to new one
- Add, commit and push

*Note: If you create a new project using the Import Project option, all commits, branches, tags will be inherited in the new project, and we just want a fresh installation without this history.*

## Run the project local
- Clone this repository `git clone git@gitlab.fuerzastudio.com:rodman-media/rodman-websites.git rodman`
- Run `composer install` on root folder;
- Enter the theme folder;
- Run `composer install`;
- Run `cp config.json.dist config.json`;
- Edit the `config.json` file and configure your local environment on lines 39 and 40
- Run `yarn install`;
- Run `yarn build`;
- Access your local link on browser and install the WP

## Patterns
- Default branch setted to `develop`
- Consider using the follow pattern to branchs and commits https://outline.fuerzastudio.com/doc/instrucoes-do-git-GNUD47SZUM
- Whenever possible use the indicated WordPress coding standards https://developer.wordpress.org/coding-standards/wordpress-coding-standards/
- To PHP developers consider always using SOLID and CALISTHENICS https://pt.slideshare.net/guilhermeblanco/php-para-adultos-clean-code-e-object-calisthenics
