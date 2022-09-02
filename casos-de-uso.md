# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Administrar quadro de horários
 - [CDU 03](#CDU-03): Administrar cadastro dos funcionários
 - [CDU 04](#CDU-04): Agendar consultas
 - [CDU 05](#CDU-05): Gerencias de feedbacks
 - [CDU 06](#CDU-06): Registrar materiais
 - [CDU 07](#CDU-07): Criar conta
 - [CDU 08](#CDU-08): Cadastrar dados do veterinário
 - [CDU 09](#CDU-09): Cadastrar dados do animal
 - [CDU 10](#CDU-10): Cadastrar dados do cliente
 - [CDU 11](#CDU-11): Armazenar dados no prontuário
 - [CDU 12](#CDU-12): Realizar pedidos de exames
 - [CDU 13](#CDU-13): Realizar consultas 

## Lista dos Atores
- Gerente <br>
- Funcionário <br>
- Veterinário <br>
- Recepcionista <br>
- Cliente

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01-Login
Ator
-Gerente
-Funcionário
-Cliente 

**Fluxo Principal**

1. O sistema solicita login e senha ao usuário. 
2. O usuário funcionário informa login e senha. 
3. Os dados são validados no Sistema Externo. 
4. O sistema exibe que o login e senha são válidos. 
5. O acesso ao sistema é liberado.

**Fluxo Alternativo**

1. Login e/ou senha inválidos 
2. O sistema exibe que o login e/ou senha são inválidos. 
3. O fluxo retorna ao passo 1 do fluxo principal

### CDU 02 - Administrar quadro de horários
Ator
-gerente
-recepcionista
-Veterinário

**Fluxo Principal**

1. O sistema solicita identificação do usuário.
2. O usuário tem permissão para acessar o quadro de horário.
3. O sistema exibe uma mensagem de confirmação
4. O sistema libera o acesso ao quadro de horário.
4. O usuário verifica dia/horário de cada profissional.
 

**Fluxo Alternativo A**

1. O sistema solicita identificação do usuário.
2. O usuário não tem permissão para acessar o quadro de horário.
3. O sistema exibe uma mensagem de erro.
3. O sistema retorna ao passo 1 do fluxo principal.

### CDU 03 - Administrar cadastro do funcionário

Ator
-Gerente

**Fluxo Principal** 

1. O usuário seleciona a opção cadastrar Profissional no menu principal. 
2. O usuário escolhe a opção cadastrar Profissional.
3. O sistema solicita os dados necessários para o cadastro do Profissional 
4. O usuário fornece os dados e confirma a operação.
5. O sistema verifica se todos foram fornecidos
6. O sistema exibe uma mensagem de confirmação.

**Fluxo Alternativo**
 
1. O usuário seleciona a opção Excluir Profissional. 
2. O sistema solicita o código do profissional a ser excluído. 
3. O usuário escolhe a opção Alterar Profissional. 
4. O sistema solicita o código do Profissional a ser alterado. 
5. O usuário escolhe a opção Cancelar.

### CDU 04- Agendar Consulta
Ator
-Cliente
-Recepcionista 
-Gerente

 **Fluxo principal**
1. O usuário seleciona a opção Agendar no menu principal
2. O usuário escolhe a opção Agendar consulta
3. O sistema solicita os dados necessários para o agendamento do cliente 
4. O usuário fornece os dados e confirma a operação.
5. O sistema verifica se todos os dados foram fornecidos.
6. O sistema exibe uma mensagem de confirmação. 

**Fluxo Alternativo**
1. O usuário seleciona a opção Excluir Agendamento. 
2. O sistema solicita o código do agendamento a ser excluído. 
3. O usuário escolhe a opção Alterar Agendamento. 
4. O sistema solicita os dados para a alteração dos agendamento. 
5. O usuário escolhe a opção Cancelar. 
6.O sistema volta ao passo 4 do Fluxo Principal.
