# Projeto Integrador II

A construção deste projeto visa atender a solicitação da disciplina - Projeto Integrador Transdisciplinar em Engenharia de Software II da Universidade Cruzeiro do Sul, com intuito avaliativo.
Contudo será uma continuação do que foi elaborado no **Projeto Integrador Transdisciplinar em Engenharia de Software I ** com o algoritmo do arquivo (Atividade_2.ALG) criado com aplicativo VISUALG versão 3.0, criado em 31/10/2019

Neste projeto de desenvolvimento, a proposta será  criar um site denominado "**Censo etário de eleitores do município Xtópolis**" para averiguar o quantitativo de pessoas aptas a votar e que informa a faixa etária dos pesquisados, com isso será disponibilizados um Web site para os interessados se cadastrarem.<br>
Usando o google charts o censo é demonstrado em tempo real na pagina são dois tipos de graficos o barra e o pizza, assim que o usuário efetua o cadastro as informações são atualizadas no banco de dados e atualize o grafico na pagina home<br>
Outro fator importante na implementação é a segurança, para o usuário participar da pesquisa é necessário cadastrar um login e senha, e ao final ele tem a opção de fazer logout imediato da aplicação.<br>
Para a realização dos testes criei e implementei um formulário, quando o usuário realiza a avaliação do site é enviado os dados da opinião dele para o meu e-mail para isso usei a class sendEmail do CodeIgniter 4, integrado com e-mail token do Gmail.<br>
Este projeto atende as exigências Design pattern , (Model,View,Controller) , implementei as Model através da class migration e também a class Seed para inserir um primeiro registro no site, para isso usei a ferramenta de automação "spark" disponivel no CodeIgniter 4. Mais informações detalhadas sobre automação usando "spark" por favor consulte a documentação do framework<br>

O desenvolvimento do Webaplication para o Frontend foi utilizado HTML-5, CSS, Bootstrap 5, Google Charts, Javascript, e para o Backend PHP 8.1 + framework Codeigniter 4, Mysql8 , servidor nginx abaixo descritivo detalhado dos links das aplicações usadas para criar o site.<br>

# Para usar este projeto foi usado seguintes recursos:

Ubuntu 20.04 - Servidor Linux - VPS hospedada Cloud Contabo<br> 
https://contabo.com/en/vps/ <br>
aaPanel 6.8.32 - aaPanel é um software que melhora a eficiência do gerenciamento de servidores - Livre <br>
https://www.aapanel.com/ <br>

Oficial Nginx 1.24.0 - Grátis : https://nginx.org/ <br>
MySQL 8.0.24 oficial MySQL é um sistema de gerenciamento de banco de dados relacional! - Livre<br>
https://dev.mysql.com/downloads/mysql/<br>

PHP-8.1 PHP oficial é a melhor linguagem de programação do mundo - Livre <br>
https://www.php.net/releases/8.1/en.php<br>
Codeigniter 4 é um framework PHP poderoso com um tamanho muito pequeno - Livre <br>
https://codeigniter4.github.io/userguide/<br>
phpMyAdmin 5.2 oficial famosa ferramenta de gerenciamento MySQL do lado da Web - Livre <br>
https://www.phpmyadmin.net/files/5.2.0/ <br>

# Como instalar e usar este projeto
1- Clone o projeto completo: https://github.com/GilmarBastos/Projeto-Integrador-II <br>
2- Descompacte os arquivos e pasta em Document Root, exemplo:/www/wwwroot/censo e no seu servidor apache ou nginx faça o apontamento para: /www/wwwroot/censo/public , para prosseguir também é necessario criar apontamento dns com dominio ou subdominio para host em questão<br>
3- Usei a IDE do VsCode para acessar terminal via console da pasta raiz: /www/wwwroot/censo <br>
4- No diretorio raiz localize o arquivo   /www/wwwroot/censo/env   e altere ele para /www/wwwroot/censo/.env <br> 
5  No diretorio /www/wwwroot/censo/app/Config/Backup_Email.php e modifique para /www/wwwroot/censo/app/Config/Email.php <br>
6- Importante para o passo a seguir, certifique se de criar antes um database para seu site e configurar as informações no arquivo .env (modifique)<br>
7- Dentro do terminal do seu console execute os seguinte comandos para criar as tabelas do projeto<br>
php spark migrate<br>
php spark db:seed UserSeeder<br>
8- Se você seguiu os passos corretamente sua Webaplication vai funcionar.<br>
9- Importante enfatizar para usar este projeto é necessário ter conhecimento elementares em PHP, servidores hospedagem (apache nginx), conhecimento intemediário em javascripts , principalmente para os graficos do google, ter familiaridade com banco de dados Mysql as querys utilizadas no projeto consumi as classes disponibilizada do CodeIgnitet4. <br>

# Considerações finais <br>
O propósito de simular uma pesquisa, como pegar dados por meio de um site salvar em um banco de dados e depois retratar através de graficos, ficou constatado que o projeto pode ser usada em uma situação real, dentro de organizações que buscam ter mais informações de seus clientes, funcionários, fornecedores e realizar avaliações dos seu serviços e produtos em geral, para alcançarem melhorias continuas nos seu processos.