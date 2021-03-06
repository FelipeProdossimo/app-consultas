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
### Criação da tabela de pacientes

```sql
CREATE TABLE `bd_consultorio`.`tb_pacientes` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `nascimento` DATE NOT NULL ,  
    `convenio` VARCHAR(3) NOT NULL ,  
    `diagnostico` TEXT NOT NULL ,    
    PRIMARY KEY  (`id`)
    ) 
    ENGINE = InnoDB;

```

### Criação da tabela de agenda
```sql
CREATE TABLE `tb_agenda` (
`id` int(11) NOT NULL,
`data` date NOT NULL,
`hora` time NOT NULL,
`id_medico` int(11) NOT NULL,
`sala` varchar(20) NOT NULL,
`id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


 Índices para tabela `tb_agenda`

ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agenda_medico` (`id_medico`),
  ADD KEY `fk_agenda_paciente` (`id_paciente`);

AUTO_INCREMENT de tabela `tb_agenda`

ALTER TABLE `tb_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

Limitadores para a tabela `tb_agenda`

ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `fk_agenda_medico` FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos` (`id`),
  ADD CONSTRAINT `fk_agenda_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes` (`id`);
  ```