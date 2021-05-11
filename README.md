# App Consultas

## Miro com a documentação do projeto
https://miro.com/app/board/o9J_lO9jUSo=/

## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clinica médica. O sistema terá os módulos de:
- Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - Opção de pesquisar paciente por qualquer parte do nome.
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em um agendamento
    - Exclusão de um agendamento 
    - Listagem de todos os agendamentos
## Tecnologias (Stack)
* Apache (XAMPP)
* PHP
* MariaDB
* HTML
* CSS
* JavaScript
* JQuery
* Bootstrap

## SQL - Banco de dados
```sql
CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Criação de tabela médicos

```sql
CREATE TABLE `bd_consultorio`.`tb_medicos` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `nome` VARCHAR(100) NOT NULL , 
     `telefone` VARCHAR(20) NOT NULL , 
     `crm` VARCHAR(50) NOT NULL , 
     `especialidade` VARCHAR(50) NOT NULL , 
     PRIMARY KEY (`id`)
     )
     ENGINE = InnoDB;
```