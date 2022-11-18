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
Fluxo principal de criar serviço:

1)O caso de uso inicia com  o ator administrador  solicitando a criação de um novo serviço.

2)O sistema  apresenta o formulário  para ser preenchimento.

3]O ator administrador  preenche o formularuo.

4) O sistema válida os dados do  serviço.

5) O sistema armazena  os dados   do  serviço.

6) o sistema envia ao a4	qpytor administrador uma mensagem de confirmação.

7) caso de uso encerrado. 

Fluxo alternativo de criar serviço:

1)O caso de uso inicia com  o ator administrador  solicitando a criação de um novo serviço.

2)O sistema  apresenta o formulário  para ser preenchimento.

3]O ator administrador não preenche adequadamente o formulário. 
 caso de uso encerrado. 

4)caso de uso encerrado. 


Atores:Administrador
Fluxo principal do cadastro do serviço: 





3->*Model*->ARMAZENAR DADOS DO SERVIÇO-->*Controller*

4->*Controller*->TRASMITIR->*Vew*

5->*Vew*->EXIBIR MEMSAGEM( Cadastro concluído com sucesso.)

Fluxo altenativo do cadastro do serviço: 

1->*Vew*-> PREENCHE OS DADOS DO SERVIÇO->*Controller*

2->*Controller*->TRASMITIR->*Model*

3->*Model*->
