# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Administrar cadastro dos usuários
 - [CDU 03](#CDU-03): Solicitar serviços
 - [CDU 04](#CDU-04): Criar serviços
 - [CDU 05](#CDU-05): Cadastrar dados dos usuários
 - [CDU 06](#CDU-06): Disponibilizar horário

## Lista dos Atores
- administrador <br>
- Funcionário <br>
- Cliente

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso] ![image](https://user-images.githubusercontent.com/111608418/207932705-c77ce4ea-4a61-4017-a72d-7b2836bde76a.png)

## Descrição dos Casos de Uso

### CDU 01 - Login
Ator
-administrador
-Funcionário
-Cliente 

**Fluxo Principal**

1. O sistema solicita login e senha ao usuário. 
2. O usuário funcionário informa login e senha. 
3. Os dados são validados no Sistema Externo. 
4. O sistema exibe que o login e senha são válidos. 
5. O acesso ao sistema é liberado.
# fluxo principal de disponibilizar o horário: #

1 ->Viww->-DIGITA HORARIO DESPONIVEIS->Controller *

2->Controller->TRAMITI->Model

3->Model->ARMAZENA HORARIO DESPONIVEIS->*Controller *

4->Controller->TRAMITI->*Controller *

5->* view*->EXEBIR MENSAGEM DE SUCESSO

# fluxo alternativode disponibilizar o horário: #

1 ->Viww->-DIGITA HORARIO DESPONIVEIS->Controller *

2->Controller->TRAMITI->Model

3->Model->NÁO ARMAZENA HORARIO DESPONIVEIS->*Controller *

4->Controller->TRAMITI->*Controller *

5->* view*->EXEBIR MENSAGEM DE ERRO
![Fluxo principal do login ](https://user-images.githubusercontent.com/111400121/201171669-6671bf8f-59bc-401e-a0d1-35ab5a762f33.jpg)


**Fluxo Alternativo**

1. Login e/ou senha inválidos.
2. O sistema exibe que o login e/ou senha são inválidos. 
3. O fluxo retorna ao passo 1 do fluxo principal.

![fluxo-alternativoA-login](https://user-images.githubusercontent.com/111400121/201171890-984f30a1-8127-4395-9891-f5edc97d229f.jpg)


### CDU 02 - Administrar cadastro dos usuário

Ator
-administrador

**Fluxo Principal** 

1. O administrador seleciona a opção cadastrar usuário no menu principal. 
2. O administrador escolhe a opção cadastrar usuário.
3. O sistema solicita os dados necessários para o cadastro do usuário.
4. O usuário fornece os dados e confirma a operação.
5. O sistema verifica se todos foram fornecidos.
6. O sistema exibe uma mensagem de confirmação.
![fluxo-prinic admin-cadastro-func](https://user-images.githubusercontent.com/111400121/201172431-b8740282-5b61-4b80-9889-9b1f862f6e5d.jpg)

**Fluxo Alternativo A**
 
1. O usuário seleciona a opção Excluir usuário. 
2. O sistema solicita o código do usuário a ser excluído. 
3. O usuário escolhe a opção Cancelar.
4. O sistema exibe uma mensagem de confirmação.
![fluxo alternativo   A- adminastrar cadastro](https://user-images.githubusercontent.com/111400121/201172605-a369bb32-dadd-4c65-a39b-744a6cd26fec.jpg)


**Fluxo Alternativo B**
 
1. O usuário escolhe a opção Alterar usuário. 
2. O sistema solicita o código do usuário a ser alterado. 
3. O usuário escolhe a opção alterar.

**Fluxo Alternativo c**
1. O usuário seleciona a opção cadastrar usuário no menu principal.
2. O usuário digita os dados incorretamente.
3. O sistema solicita que o usuário preencha os campos corretamente.
4. O sistema volta ao passo 3 do Fluxo Principal.


### CDU 03 - Solicitar serviços
Ator
-Cliente
-administrador

 **Fluxo principal**
1. O usuário seleciona a opção Agendar no menu principal.
2. O usuário escolhe a opção Agendar consulta.
3. O sistema exibe o dia e o horario disponivel.
4. O usuário seleciona o dia e o horario desejado.
5. O usuário fornece os dados e confirma a operação.
6. O sistema verifica se todos os dados foram fornecidos.
7. O sistema exibe uma mensagem de confirmação. 


![tcc diagrama](https://user-images.githubusercontent.com/111608418/207936561-63d9470c-cfc0-4074-b19e-af35979491fc.png)

**Fluxo Alternativo A**
1. O usuário seleciona a opção Excluir Agendamento. 
2. O sistema solicita o código do agendamento a ser excluído. 
3. O usuário escolhe a opção Cancelar. 
4. O sistema volta ao passo 5 do Fluxo Principal.
![image](https://user-images.githubusercontent.com/111608418/206539554-8e30512b-17b3-4dfc-a13d-37b332c8a130.png)


**Fluxo Alternativo B**
1. O usuário escolhe a opção Editar Agendamento. 
2. O sistema solicita os dados para a alteração dos agendamento. 
3. O usuário escolhe a opção Editar. 
4. O sistema volta ao passo 4 do Fluxo Principal.
![image](https://user-images.githubusercontent.com/111400121/206534271-197133fe-4c63-4ea3-80fa-ccc34d3021d0.png)


**Fluxo Alternativo c**
1. O usuário seleciona a opção Agendar no menu principal.
2. O usuário digita os dados incorretamente.
3. O sistema solicita que o usuário preencha os campos corretamente.
4. O sistema volta ao passo 3 do Fluxo Principal.
![image](https://user-images.githubusercontent.com/111400121/206539112-4d46892b-d342-4a8b-99b6-602fa700f16b.png)


### CDU 04-Criar serviço
Ator
-administrador

**Fluxo Principal**

1. O caso de uso inicia com o ator administrador solicitando a criação de um novo serviço.
2. O sistema apresenta o formulário para ser preenchimento.
3. O ator administrador preenche o formulário.
4. O sistema válida os dados do serviço.
5. O sistema armazena os dados do serviço.
6. O sistema envia ao ator administrador uma mensagem de confirmação.
7. O caso de uso encerrado.

![tcc2](https://user-images.githubusercontent.com/111608418/207936240-830c3799-f46d-444f-9f39-00e2b2eefdac.png)

### Fluxo alternativo A:

1. O caso de uso inicia com o ator administrador solicitando a criação de um novo serviço.
2. O sistema apresenta o formulário para ser preenchimento.
3. O ator administrador não preenche adequadamente o formulário. 
4. caso de uso encerrado.
![image](https://user-images.githubusercontent.com/111400121/200863985-f4bb1677-bc14-4889-9b89-6d295415e955.png)



**Fluxo Alternativo B**
1. O sistema exibe os serviços;
2. O(a) usuaário seleciona o serviço desejado;
3. O sistema verifica se o serviço estar disponivél;
4. O sistema não encontra serviço disponivél:
5. O sistema encerra a ação.
![image](https://user-images.githubusercontent.com/111400121/203131896-67fdef28-c9af-484e-b887-e34e4e32982e.png)

**Fluxo Alternativo c**
1. O sistema exibe os serviços;
2. O(a) usuário seleciona o serviço que deseja excluir;
3. o sistema seleciona a opção "excluir"
4. o sistema  redireciona o usuário ppara o fluxo principal

**Fluxo Alternativo d**
1. O usuário escolhe a opção Editar serviços. 
2. O sistema solicita os dados para a alteração do serviço. 
3. O usuário escolhe a opção Editar. 
4. O sistema volta ao passo 4 do Fluxo Principal.

### CDU 05 - cadastrar dados do usuário
Ator
-Administrador
-Usuário

**Fluxo Principal**
1. O usuário preenche os dados do usuário
2. O sistema armazena no banco de dados
3. o sistema envia uma mensagem de sucesso!

![image](https://user-images.githubusercontent.com/111400121/208182130-45b6b42a-6c36-420d-9905-cd8b44a57bfd.png)

**Fluxo Alternativo A**
1. O usuário preenche os dados do usuário
2. Os dados do pet foram preenchido incorretamente
3. O sistema exibe uma mensagem de erro
4. O sistemma voltara para a página inicial

![image](https://user-images.githubusercontent.com/111400121/208181864-ec9ae9f1-1d13-455b-978c-e49345b89b2d.png)

### CDU 06 - Disponibilizar horário

![SequenceDiagram1](https://user-images.githubusercontent.com/101880549/208558220-9459ccf5-ac70-4ed8-ab97-ab56896df295.jpg)

**Fluxo Alternativo A**

![SequenceDiagram2](https://user-images.githubusercontent.com/101880549/208558148-4ad02762-b41d-4f83-acb7-c73f70cc13ed.jpg)


