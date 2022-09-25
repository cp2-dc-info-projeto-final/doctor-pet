# Doctor Pet

Projeto Final do Curso Técnico Integrado de Desenvolvimento de Sistemas - Colégio Pedro II - Campus Duque de Caxias

**Integrantes:**
 - Jhonatha Rodrigues dos Santos
 - Nicoly Ferreira Gomes
 - Ramon Brasil Barboza Ofemann
 - Thainá Schayder Valadão

 ## Descrição do Projeto

 O site da empresa fictícia Doctor Pet tem como objetivo o agendamento online de consultas veterinárias. O site disponibilizará um login para o cliente, funcionário e o gerente, podendo ser efetuada o agendamento de consultas, assim como remarcar e cancelar as consultas.

## Documentação

- [Manual do Usuário](manual.md)
- [Requisitos](requisitos.md)
- [Casos de Uso](casos-de-uso.md)
- [Apresentação](apresentacao.pdf)

**Diagrama de Classes**

![Diagrama de Classes](diagrama-exemplo.png)

**Modelagem do Banco de Dados**

![Diagrama de Banco de Dados](diagrama-de-banco-de-dados.png)
: Fuxo principal do login do funcinário:

1.  ->  View  PREENCHE  (nome do  funcionário CPf)

2  ->controller(nome, do funcionário,cpf)TRANSMITE
 -> model

3. ->   Model (nome do funcionário,cpf) AUTOEIZA -> controller ->Redireciona para home7

Fluxo  altenativo  do login do funcionário;

1. -> View PREENCHE   (nome do funcionário,cpf)

2.  -> Controller (nome do funcionário,cpf)TRANSMITE
->  Model 

3. -> Model(nome do funcionário,cpf)não  altorizado  ->Controlle  -> mensagem deerro

4.-> controlle-> TRANSMITE -> view

: Fluxo principal do login do cliente:

1.  -> View PREENCHER( nome do cliente,  CPF)

2.  ->  Controller ( nome do cliente, CPF) TRNSMITE -> ModelFluxo  altenativo  do login do cliente:

3. ->   Model (nome do cliente,cpf) AUTOEIZA -> controller ->Redireciona para home

Fluxo  altenativo  do login do cliente:

1. -> View PREENCHE   (nome do cliente ,cpf)

2.  -> Controller (nome do  ,cpf)TRANSMITE
->  Model 

3. -> Model(nome do cliente,cpf)não  altorizado  ->Controlle  -> mensagem de erro

4.-> controlle-> TRANSMITE -> view

[: Fluxo principal do login do cliente:

1.  -> View PREENCHER( nome do cliente,  CPF)

2.  ->  Controller ( nome do cliente, CPF) TRNSMITE -> Model



3. -> ModelA°1
 Fluxo principal do cadastros do cliente:

1.  ->  View  PREENCHE  (nome do tuto ,CPF,telefone,nome do pet,peso,espécie)

2  ->Controller(nome do tuto  ,cpf,telefone,nome do pet,peso,espécie)TRANSMITIR
-> Model

3. ->   Model (nome do tuto ,cpf,telefone,nome do pet,peso,espécie)  -> ARMAZENAR DADOS

4. -> Model ->MEMSAGEM -> CADRASTO CONCLUIDO COM SUCESSO -> CONTROLLER

5. ->Controller-> TRASMITIR -> CADRASTO CONCLUIDO COM SUCESSO -> View

Fluxo altenativo  do cadastro do cliente:

1. -> View PREENCHE   ( nome do tuto ,CPF,telefone,nome do pet,peso,espécie)

2.  - > Controller   (nome do tuto ,CPF,telefone,nome do pet,peso,espécie)TRANSMITE->  Model 

3. ->   Model (nome do tuto ,cpf,telefone,nome do pet,peso,espécie)  -> ARMAZENAR DADOS

4. -> Model ->MEMSAGEM ->-NÃO FOI´POSSIVEL ARMAZENA OS DADOS> CONTROLLER

5. ->Controller-> TRASMITIR->MEMSAGEM -> NÃO FOI´POSSIVEL ARMAZENA OS DADO 

 Fluxo principal do cadastros do  funcionário:

1.  ->  View  PREENCHE  (nome do funcionário,CPF,especialização)

2  ->Controller (nome do funcionário,CPF,especialização) TRANSMITIR
-> Model

3. ->   Model (nome do funcionário,CPF,especialização) -> ARMAZENAR DADOS

4. -> Model ->MEMSAGEM -> CADRASTO CONCLUIDO COM SUCESSO -> CONTROLLER

5. ->Controller-> TRASMITIR -> CADRASTO CONCLUIDO COM SUCESSO -> View

Fluxo altenativo  do cadastro do funcionário:

1.  ->  View  PREENCHE  (nome do funcionário,CPF,especialização)

2  ->Controller (nome do funcionário,CPF,especialização) TRANSMITIR
-> Model

3. ->   Model (nome do funcionário,CPF,especialização) -> ARMAZENAR DADOS.

 4. -> Model ->MEMSAGEM ->-NÃO FOI´POSSIVEL ARMAZENA OS DADOS> CONTROLLER

5. ->Controller-> TRASMITIR->MEMSAGEM -> NÃO FOI´POSSIVEL ARMAZENA OS DADO
