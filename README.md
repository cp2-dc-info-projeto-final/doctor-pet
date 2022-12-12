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

#Fluxo alternativo C de agendamento [editar]:#

1->*Model*->CONSULTA OBANCO DE DADOS->*Cotroller*

2->*Controller*->TEANSMITI->*Vew*

3->*View*->EXIBIBIR O AGENDAMENTO

4->¨*View*->EDITAR AGENDAMENTO->*Controller*

5->*Controlle*r->TRANSMITI->*Model*

6->*Model*->ALTERA AGENDAMENTO ->*Controlle*

7->*Controller*->TRANSMITI->*View*

8->View->EXIBIR MENSAGEM ( agendamento alterado com sucesso)

#Fluxo  altenativo de D agendamento [editar]:#

1->*Model*->CONSULTA OBANCO DE DADOS->*Cotroller*

2->*Controller*->TEANSMITI->*Vew*

3->*View*->EXIBIBIR O AGENDAMENTO


4->*View*->CANCELA

#Fluxo alternativo C de serviço  [editar]:#

1->*Model*->CONSULTA OBANCO DE DADOS->*Cotroller*

2->*Controller*->TEANSMITI->*Vew*

3->*View*->EXIBIBIR O SERVIÇO

4->¨*View*->EDITAR SERVIÇO->*Controller*

5->*Controlle*r->TRANSMITI->*Model*

6->*Model*->ALTERA AGENDAMENTO ->*Controlle*

7->*Controller*->TRANSMITI->*View*

8->View->EXIBIR MENSAGEM (Serviço alterado com sucesso)

#Fluxo  altenativo de D agendamento [editar]:#

1->*Model*->CONSULTA OBANCO DE DADOS->*Cotroller*

2->*Controller*->TEANSMITI->*Vew*

3->*View*->EXIBIBIR O AGENDAMENTO


4->*View*->CANCELA

#Fluxo principal de exclui  serviço:#

1->*View*->EXCLUIR 

2->*View*->EXIBI MENSAGEM DE CONFIRMAÇÃO->*Controller*

3->*Controller*->TRANSMITI->*Model*

 4->*Model*->-DELETAR SERVIÇO->*Controller*

5->*Controller*->TRANSMITI->*View*

6->*View*->EXIII MENSAGEM SERVIÇO SUCESSO 

#Fluxo alternativo de Excluirdados do usuario:#
										
1->*View*->EXCLUIR 

2->*View*->MENSAGEM DE CONFIRMAÇÃO
#Fluxo principal de excluir agendamento:#

1->*View*->EXCLUIR 

2->*View*->EXIBI MENSAGEM DE CONFIRMAÇÃO->*Controller*

3->*Controller*->TRANSMITI->*Model*

 4->*Model*->-DELETAR AGENDAMENTO>*Controller*

5->*Controller*->TRANSMITI->*View*

6->*View*->EXIII MENSAGEM DE SUCESSO 

#Fluxo alternativo de Excluir agendamento:#

1->*View*->EXCLUIR 

2->*View*->MENSAGEM DE CONFIRMAÇÃO

# Fluxo principal de agendamento : #

1->^view*->REQUISITAR SERVIÇOS->^Controller^

2->*Controller*->TRANSMITI->*Model*

3->*Model*->CONDILTASER VIÇO ->*Controller*

4-*>Controller*->TRANSMITI->*View*

5->*View*->Exibir SERVIÇO

6->*View*->SELECIONAR SERVIÇO->*Cotroller*

7->*Controller*->TRANSMITI->*Model*

8->*Model*->CONSUNTAR DISPONIBILIDADE(dia/hora)->*Cotroller*

9->*Controller->TRANSMITI(dia/hora)->*View*

10->View*->EXIBIR(dia/hora)

11->*View*->SELECIONAR(dia/hora)->*Controller*

12->*Controller->TRANSMITI(dia/hora)->*Model*

13->*Model*->ARMAZENAR O AGENDAMENTO ->*Controller

14->*Controller->TRANSMITI->*View*

15->View->EXIBIR(Srviço agendado com sucesso.)

#Fluxo alternativo de agendamento:#

1->^view*->REQUISITAR SERVIÇOS->^Controller^

2->*Controller*->TRANSMITI->*Model*

3->*Model*->CONDILTASER VIÇO ->*Controller*

4-*>Controller*->TRANSMITI->*View*

5->*View*->Exibir SERVIÇO

6->*View*->NÃO SELECIONAR SERVIÇO->*Cotroller*

7->*Controller*->TRANSMITI->*Model*

8->*Model*->CONSUNTAR DISPONIBILIDADE(dia/hora)->*Cotroller*

9->*Controller->TRANSMITI(dia/hora)->*View*

10->View*->EXIBIR(dia/hora)

11->*View*->NÃO SELECIONAR(dia/hora)->*Controller*

12->*Controller->TRANSMITI(dia/hora)->*Model*

13->*Model*->NÃO ARMAZENAR O AGENDAMENTO ->*Controller

14->*Controller->TRANSMITI->*View*

15->View->EXIBIR(Não foi possível agendar o serviço.)

