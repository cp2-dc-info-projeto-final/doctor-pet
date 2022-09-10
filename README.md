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

![Diagrama de Banco de Dados](diagrama-exemplo.png)
- [][08:18, 08/09/2022] Thaina: Caso de uso criar conta

Fluxo principal: criar conta

1) Este caso de uso inicia quando o ator cliente solicita a criação de uma conta .

2) O sistema apresenta o formulário para o preenchimento com os dados do cliente .

3) O ator cliente  preenche  o formulário com os dados necessários para a criação da conta .

4) O sistema válida os dados do cliente .

5) O sistema armazena as informações do cliente .

6) O ator gerente analisa os dados do ator cliente .

6) O ator gerente válida a conta do ator cliente .

7) O caso de uso é encerrado .

Fluxo alternativo: A

1) Este caso de uso inicia quando o ator cliente solicita a criação de uma conta .

2) O sistema apresenta o formulário para o preenchimento com os dados do cliente .

3) O ator cliente preenche o formulário incorretamente .

4) O sistema imprime uma mensagem de erro .

5) Caso de uso encerrado.

Fluxo alternativo: B

1) Este caso de uso inicia quando o ator cliente solicita a criação de uma conta .

2) O sistema apresenta o formulário para o preenchimento com os dados do cliente .

3) O ator cliente preenche o formulário com os dados necessários para a criação da conta .

4) O sistema válida os dados do cliente .

5) O sistema armazena as informações do cliente .

6) O ator gerente analisa os dados do ator cliente  .

7) O ator gerente não válida a conta do ator cliente .

8) O sistema elimina os dados do cliente .

9) Caso de uso encerrado.

Atores:Cliente ,Gerente.
[14:39, 08/09/2022] Thaina: Caso de uso consulta.
 
Fluxo principal.

1)Este caso de uso inicia com o ator recepcionista digita os dados do cliente no sistema.

2)O sistema  confirma a consulta  do cliente .

3)O sistema envia a ficha do cliente ao ator veterinário.

4)O ator veterinário abre a ficha do cliente.
 
5)O ator veterinário cria um relatório  da consulta.

6)O sistema adiciona o novo relatório a  ficha do cliente

7)O caso de uso é encerrado.

Atores : Recepcionista ,veterinário
