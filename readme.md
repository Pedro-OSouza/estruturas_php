# 🧮 Gerador de Tabuada em PHP

## 📑 Menu de Navegação
- [🧮 Gerador de Tabuada em PHP](#-gerador-de-tabuada-em-php)
  - [📑 Menu de Navegação](#-menu-de-navegação)
  - [📋 Descrição do Projeto](#-descrição-do-projeto)
  - [✨ Funcionalidades](#-funcionalidades)
  - [🛠️ Tecnologias Utilizadas](#️-tecnologias-utilizadas)
  - [🚀 Como Executar](#-como-executar)
  - [📝 Exemplo de Uso](#-exemplo-de-uso)
- [🔍 Estruturas de Controle Implementadas (Explicação Didática)](#-estruturas-de-controle-implementadas-explicação-didática)
  - [1. 🔁 **WHILE** — Loop Principal](#1--while--loop-principal)
  - [2. 🔀 **SWITCH / CASE** — Controle de opções](#2--switch--case--controle-de-opções)
  - [3. ❓ **IF / ELSE** — Validação e decisão](#3--if--else--validação-e-decisão)
  - [4. 🔂 **FOR** — Repetição contada](#4--for--repetição-contada)
- [📚 Conceitos Demonstrados no Trabalho](#-conceitos-demonstrados-no-trabalho)
- [🎯 Objetivos Acadêmicos Atendidos](#-objetivos-acadêmicos-atendidos)
- [🔮 Possíveis Melhorias](#-possíveis-melhorias)

---

## 📋 Descrição do Projeto

Este projeto é um gerador de tabuada desenvolvido em PHP para uso em linha de comando (CLI), criado como trabalho acadêmico para a disciplina de **Programação Estruturada**.  
O foco principal é demonstrar o uso correto e organizado das **estruturas de controle e repetição**.

---

## ✨ Funcionalidades

- Menu interativo com loop contínuo  
- Geração de tabuada (1 a 10)  
- Validação de entrada  
- Interface CLI  
- Controle de fluxo simples  

---

## 🛠️ Tecnologias Utilizadas

- PHP (>= 5.0)  
- Interface CLI  

---

## 🚀 Como Executar

1. Baixe o código `estruturas.php`  
2. Execute no terminal:

```bash
php estruturas.php
```

---

## 📝 Exemplo de Uso

```
=================================
  Estruturas de controle, repetição e fluxo
=================================
1. Gerar tabuada de um número
0. Sair
=================================
Escolha uma opção: 1

--- Tabuada ---
Digite um número: 7

7 x 1 = 7
7 x 2 = 14
...
7 x 10 = 70

[Pressione ENTER para continuar]
```

---

# 🔍 Estruturas de Controle Implementadas (Explicação Didática)

## 1. 🔁 **WHILE** — Loop Principal
Mantém o programa rodando até o usuário desejar sair.

**Função no código:**  
- Repetir o menu  
- Controlar o programa com `$rodando`

Ideal para: programas interativos.

---

## 2. 🔀 **SWITCH / CASE** — Controle de opções
Gerencia as escolhas do menu feitas pelo usuário.

**Função no código:**  
- Executar tabuada  
- Encerrar o programa  
- Tratar opção inválida  

Ideal para: múltiplos caminhos lógicos.

---

## 3. ❓ **IF / ELSE** — Validação e decisão
Garante que o número recebido seja válido.

**Função no código:**  
- Verificar se o valor informado é zero  
- Solicitar outro número  

Ideal para: tomadas de decisão simples.

---

## 4. 🔂 **FOR** — Repetição contada
Repete um bloco de código de 1 a 10 para gerar a tabuada.

**Função no código:**  
- Calcular cada linha da tabuada  

Ideal para: sequências com limite definido.

---

# 📚 Conceitos Demonstrados no Trabalho

- Estruturas de controle: `if`, `else`, `switch`, `break`  
- Estruturas de repetição: `while`, `for`  
- Entrada: `fgets(STDIN)`  
- Saída: `echo`  
- Variável de controle: `$rodando`

---

# 🎯 Objetivos Acadêmicos Atendidos

- Aplicação de estruturas de controle  
- Demonstração clara de loops  
- Fluxo lógico estruturado  
- Validação de entrada  
- Programa funcional em CLI  

---

# 🔮 Possíveis Melhorias

- Outras operações matemáticas  
- Intervalo de tabuada customizável  
- Tratamento de erros  
- Cores no terminal  
- Histórico de tabuadas  

---
