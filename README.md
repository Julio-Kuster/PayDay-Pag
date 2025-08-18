 Payday Pag

**Payday Pag** é um sistema de pagamentos que tem como objetivo
possibilitar transações financeiras seguras entre usuários e comércios,
utilizando carteiras digitais e múltiplos métodos de pagamento.

------------------------------------------------------------------------

 Escolhas de Modelagem

A modelagem do banco de dados foi pensada para refletir os principais
requisitos de um sistema de pagamentos digitais:

-   **Usuários (`users`)**: responsáveis por autenticação e
    identificação dos clientes.\
-   **Carteira (`carteira`)**: cada usuário possui uma carteira
    vinculada para armazenar saldo e controlar entradas/saídas de
    valores.\
-   **Métodos de Pagamento (`metodos_pagamento`)**: abstração que
    permite registrar diferentes formas de pagamento (cartão, PIX,
    boleto, etc.), atendendo à flexibilidade do sistema.\
-   **Transações (`transacao`)**: entidade central que registra toda
    movimentação financeira, garantindo rastreabilidade e consistência
    das operações.\
-   **Comércio (`comercio`)**: possibilita que estabelecimentos sejam
    cadastrados como recebedores de pagamentos.\
-   **Cache e Jobs (`cache`, `jobs`)**: implementados para otimizar o
    desempenho e suportar tarefas assíncronas, como processamento de
    transações em fila.

------------------------------------------------------------------------

  Justificativa

Esse modelo atende ao tema **sistema de pagamento** porque:\
- Permite que usuários tenham **controle sobre seus saldos** via
carteira.\
- Dá suporte a **diversos meios de pagamento**, aumentando a
aplicabilidade do sistema.\
- Mantém **registro detalhado das transações**, fundamental em qualquer
solução financeira.\
- Facilita a **integração com comércios**, cumprindo o objetivo de ser
uma plataforma de pagamentos.\
- Garante **escalabilidade** com o uso de filas e cache, evitando
gargalos em operações críticas.

------------------------------------------------------------------------

 Autores

Desenvolvido por Júlio Cesar Guzzo Küster, Felipe Queiroz Hyczy, Andrew Bertelli, Josué de Castilho.
