<h1 align="center">
      <a href="#" alt="Tela de Login">Envio de Documentos para Assinatura</a>
</h1>

<h3 align="center">
     Um sistema para integrar API do [Portal de Assinaturas](https://desenvolvedor.portaldeassinaturas.com.br/).
</h3>

<h4 align="center">
	🚧   Concluído 
</h4>

Tabela de conteúdos
=================
<!--ts-->
   * [Sobre o projeto](#-sobre-o-projeto)
   * [Funcionalidades](#funcionalidades)
   * [Como executar o projeto](#-como-executar-o-projeto)
     * [Pré-requisitos](#pré-requisitos)
   * [Insomnia](configuração-do-insomnia).
   * [Tecnologias](#-tecnologias)
   * [Autor](#-autor)
<!--te-->


## 💻 Sobre o projeto

Projeto desenvolvido para testar integração de uma API [Portal de Assinaturas](https://desenvolvedor.portaldeassinaturas.com.br/) em PHP Puro sem utilização de qualquer Biblioteca ou Framework.

---

## ⚙️ Funcionalidades

- [x] Upload de arquivo para API
- [x] Início do fluxo para assinar o documento
- [x] Download do arquivo e das informações com o documento já assinado

---

## 🚀 Como executar o projeto

Este projeto é apenas back-end, não possuindo interface gráfica.

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina ferramentas como:
[WampServer](https://www.wampserver.com/en/) ou [Xampp](https://www.apachefriends.org/pt_br/index.html) 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/).
E para testar as rotas eu recomendo utilizar o [Insomnia](https://insomnia.rest/download).

#### 🧭 Rodando a Aplicação

```bash
# Clone este repositório
$ https://github.com/delimamatheus/SicrediAPI.git
# Acesse seu localhost no seu navegador
$ Configure um virtual host com o caminho da pasta na qual clonou o projeto
# Acesse o virtual host que você configurou
```

---

## Configuração do Insomnia

#### GERAL

Exemplo de Auth. Aqui é necessário usar o Token disponibilizado pela API.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/83312bbb-46d5-42a7-a147-86fbbac76a70)

Exemplo de Header. Não sendo necessário apenas na função de Download.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/fac6ec65-c82a-43a3-a2af-0be4fad1154f)

#### UPLOAD

Exemplo de Body.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/14b7d2d9-f68f-4cef-9aeb-d19dc21c79fc)

Exemplo de Retorno.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/cfff19e8-67c6-4d1a-aac1-5a5b75d3428f)

#### CREATE

Exemplo de Body. Em 'id' dentro de 'upload' é necessário colocar o retorno da função de Upload.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/6da417ca-5b53-4536-ab60-8f4aa5b50c9d)

Exemplo de Retorno. Atente-se a 'chave' que foi retornada, pois é o que será usado para o Download.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/b7fc0de8-2ac3-4610-ab75-0381489d9e13)

#### DOWNLOAD

Essa função não tem Body, pois é tudo passado por Query, note que o valor da 'key' é a 'chave' retornada na função anterior.
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/e49f1b67-0075-4f7b-b6c3-d7a7fd8d1d31)

Exemplo de Retorno. (Pode variar de acordo com as informações passadas por Query).
![image](https://github.com/delimamatheus/SicrediAPI/assets/43099410/097741a6-27df-4344-8034-7de29c2c191a)

---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

-   **[PHP]**

## 🦸 Autor


<img style="border-radius: 50%;" src="https://user-images.githubusercontent.com/43099410/208215899-be71919d-894a-4782-95c4-de0af85c6377.png" width="100px;" alt=""/>
<br />
<sub><b>Matheus de Lima</b></sub>
<br />

[![Linkedin Badge](https://img.shields.io/badge/-Matheus-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tgmarinho/)](https://www.linkedin.com/in/mthslm/) 
[![Gmail Badge](https://img.shields.io/badge/-matheuscontato.delima@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:tgmarinho@gmail.com)](mailto:matheuscontato.delima@gmail.com)

---
