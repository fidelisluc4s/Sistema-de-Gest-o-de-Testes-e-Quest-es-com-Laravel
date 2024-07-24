# Sistema de Gestão de Testes e Questões

Este projeto é um sistema de gestão de testes e questões, desenvolvido com Laravel, que permite a criação, edição e visualização de testes e suas respectivas questões. Além disso, possui um sistema de autenticação de usuários.

## Funcionalidades

- Criação de formulários para inserção de testes e questões.
- CRUD para recursos de testes e questões.
- Relacionamento entre testes e questões (um teste tem várias questões e uma questão pertence a um teste).
- Relacionamento entre usuários e testes (um usuário pode criar vários testes e um teste pertence a um usuário).
- Exibição de testes com suas questões.
- Sistema de autenticação de usuários.

## Estrutura do Projeto

- `database/migrations/` : Contém as migrações para criação das tabelas `testes` e `questoes`.
- `app/Models/` : Contém os modelos `Teste`, `Questao` e `User`.
- `app/Http/Controllers/` : Contém os controladores `TesteController` e `QuestaoController`.
- `resources/views/` : Contém as views para formulários e exibição dos testes e questões.

## Requisitos

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- MySQL

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
