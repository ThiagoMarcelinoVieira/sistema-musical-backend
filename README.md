# 🎵 Sistema Musical - Projeto Backend

Este é o repositório do projeto **Sistema Musical**, desenvolvido como parte dos requisitos da matéria de **Backend** do curso técnico. O sistema consiste em uma aplicação web completa para gerenciamento de artistas e músicas, incluindo sistema de autenticação, upload de mídias e integração com links do YouTube.

---

## 👨‍💻 Sobre o Autor e o Curso

- **Autor:** Thiago Marcelino Vieira
- **Instituição:** SENAI 118
- **Curso:** Desenvolvimento de Sistemas
- **Matéria:** Backend

---

## 🚀 Funcionalidades

O sistema foi transformado de uma interface estática para uma aplicação totalmente dinâmica utilizando PHP e banco de dados MySQL. As principais funcionalidades incluem:

* **🔒 Sistema de Autenticação:** Login e logout com controle de sessão (`$_SESSION`) e senhas criptografadas no banco de dados utilizando `bcrypt` (`password_hash` e `password_verify`).
* **🎤 CRUD de Artistas:** Cadastro, leitura, atualização e exclusão de artistas.
* **🎵 CRUD de Músicas:** Gerenciamento completo do catálogo de músicas vinculadas aos artistas.
* **🖼️ Upload e Processamento de Imagens:** Funcionalidade para envio de fotos de artistas e capas de álbuns, com redimensionamento automático via biblioteca **GD** do PHP.
* **▶️ Integração com YouTube:** Extração automática de IDs de vídeos do YouTube a partir de URLs fornecidas no cadastro de músicas, permitindo assistir diretamente pelo sistema.
* **🔍 Biblioteca Musical (Filtros):** Página dedicada à listagem de músicas com filtros dinâmicos e combináveis por busca geral (título/álbum), artista e gênero.
* **🛡️ Segurança:** Proteção contra SQL Injection (uso de *Prepared Statements*), XSS (uso de `htmlspecialchars`) e proteção de rotas restritas apenas para usuários logados.

---

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP (Backend)
* **Banco de Dados:** MySQL (via extensão `mysqli` orientada a objetos)
* **Frontend:** HTML5, CSS3 (variáveis, flexbox, grid, design responsivo)
* **Servidor Local:** XAMPP, WAMP, Laragon ou similar (necessário Apache + MySQL)

---

## ⚙️ Como Executar o Projeto

Siga os passos abaixo para rodar o projeto localmente na sua máquina:

### 1. Preparação do Ambiente
Certifique-se de ter um servidor web com PHP e MySQL instalados (ex: XAMPP). É **obrigatório** que a extensão `GD` do PHP esteja habilitada no seu `php.ini` para que o redimensionamento de imagens funcione corretamente.

### 2. Configuração do Banco de Dados
1. Abra o painel do seu banco de dados (ex: phpMyAdmin).
2. Execute o conteúdo do arquivo `bd.sql` fornecido na raiz do projeto. Ele irá:
   - Criar o banco de dados `sistema_musical_v2`.
   - Criar as tabelas `usuarios`, `artistas` e `musicas`.
   - Inserir o usuário administrador padrão.

### 3. Configuração da Conexão
Se necessário, abra o arquivo `conexao.php` e altere as credenciais (`$username`, `$password`) de acordo com o seu servidor MySQL local:

```php
$servername = "localhost";
$username   = "root"; // Altere se necessário
$password   = "Senai@118"; // Altere se necessário
$dbname     = "sistema_musical_v2";
```

### 4. Acesso ao Sistema
Mova a pasta do projeto para o diretório público do seu servidor (ex: `htdocs` no XAMPP ou `www` no WAMP). Acesse o projeto pelo navegador:
`http://localhost/nome-da-pasta-do-projeto/`

**Credenciais de Acesso (Padrão):**
* **Usuário:** `admin`
* **Senha:** `123`

---

## 📂 Estrutura de Arquivos Principais

* `bd.sql`: Script de criação e população inicial do banco de dados.
* `conexao.php`: Script de conexão com o banco e criação automática da pasta `img/`.
* `login.php` / `logout.php`: Gerenciamento de autenticação.
* `valida_sessao.php`: Middleware para proteger as páginas restritas.
* `index.php`: Dashboard principal após o login.
* `cadastro_artista.php`: Tela e lógica do CRUD de artistas.
* `cadastro_musica.php`: Tela e lógica do CRUD de músicas.
* `listagem_musicas.php`: Biblioteca pública com sistema de busca e filtros.
* `styles.css`: Estilização global do sistema.

---
*Projeto desenvolvido para fins acadêmicos - SENAI 118*
