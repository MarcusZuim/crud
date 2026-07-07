# Sistema CRUD - Painel de Controle de Clientes

Este é um sistema de gerenciamento de clientes estruturado em PHP puro (procedural) integrado ao banco de dados MySQL, utilizando o framework visual Bootstrap 3. O projeto foi desenvolvido de forma limpa, direta e eficiente, priorizando a legibilidade do código, facilidade de manutenção e conformidade rigorosa com os requisitos técnicos estabelecidos.

---

## 🚀 Funcionalidades do Sistema

O projeto cobre o ciclo completo de um aplicativo dinâmico baseado em dados (**CRUD**):

1. **Autenticação de Segurança (Login):**
   - Sistema de controle de acesso restrito com múltiplos administradores configurados em código.
   - Gerenciamento de avisos temporários via **Sessões do PHP (`$_SESSION`)**, garantindo que alertas de erro desapareçam automaticamente ao atualizar a página (evitando mensagens persistentes e melhorando a experiência do usuário).

2. **Visualização Centralizada (Read):**
   - Painel administrativo dinâmico (`index.php`) estruturado em formato de "card" flutuante moderno.
   - Listagem em tempo real puxando os dados diretamente do banco usando a biblioteca nativa **PDO**.
   - Interface formatada com tabelas responsivas, linhas alternadas (`table-striped`) e destaque ao passar o mouse (`table-hover`).

3. **Inclusão Dinâmica (Create):**
   - Formulário de cadastro (`cadastrar.php`) com validação de campos obrigatórios (`required`) diretamente no HTML5.
   - Envio seguro via método `POST`, redirecionando o usuário de volta ao painel principal imediatamente após a inserção.

4. **Atualização de Registros (Update):**
   - Tela de edição (`editar.php`) que recupera os dados atuais do registro via parâmetro `GET` na URL, preenchendo automaticamente o formulário para modificação.

5. **Exclusão Segura (Delete):**
   - Script de remoção direta (`excluir.php`).
   - **Mecanismo de Confirmação Ativa:** Interceptação via JavaScript nativo (`onclick="return confirm(...)"`), impedindo exclusões acidentais no banco de dados e garantindo maior estabilidade operacional.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 7.4+ / 8.x** (Estrutura procedural direta e clara)
- **PDO (PHP Data Objects)** (Conexão nativa e otimizada com o banco de dados)
- **Bootstrap 3.3.7** (Framework CSS oficial via CDN, respeitando fielmente as especificações visuais do edital)
- **CSS3** (Estilização personalizada para o plano de fundo em degradê e caixas de diálogo)
- **MySQL / MariaDB** (Armazenamento relacional dos dados)

---

## 📁 Estrutura de Arquivos do Projeto

```text
crud/
├── config/
│   └── config.php      # Variáveis e inicialização da conexão PDO com o banco
├── css/
│   └── style.css       # Estilização visual personalizada (Fundo degradê e layouts dos cards)
├── login.php           # Tela de autenticação e validação de administradores
├── index.php           # Painel principal com a listagem dos clientes em tabela Bootstrap
├── cadastrar.php       # Formulário e script de inserção de novos clientes
├── editar.php          # Formulário e script de atualização de dados existentes
└── excluir.php         # Script lógico para remoção de registros do banco de dados
```

---

### 💾 Instalação e Configuração (Ambiente Local)

1. **Clonar ou Mover o Projeto:**
* Mova a pasta `crud` para dentro do diretório de execução do seu servidor local (Ex: `C:\laragon\www\crud\` ou `C:\xampp\htdocs\crud\`).


2. **Configuração do Banco de Dados:**
* Certifique-se de que o MySQL está ativo.
* Crie um banco de dados chamado `crud` [source: 1].
* Execute os comandos SQL abaixo para criar as tabelas de **clientes** e de **usuários administradores**:
```sql
-- Tabela de Clientes
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);

-- Tabela de Usuários Administradores
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

-- Inserindo o usuário administrador para testes de login
INSERT INTO users (email, senha) VALUES ('seuemail@gmail.com', 'suasenha');

```

3. **Configuração de Conexão:**
* Caso seu ambiente local utilize usuário ou senha diferentes do padrão do Laragon/XAMPP (`root` e senha vazia), ajuste as variáveis correspondentes localizadas no arquivo `config/config.php` [source: 1].


4. **Acesso ao Sistema:**
* Abra o navegador e acesse: `http://localhost/crud/login.php`
* **Autenticação Dinâmica (Via Banco de Dados):** O sistema não valida mais credenciais estáticas no código. O acesso deve ser feito utilizando o e-mail cadastrado na tabela `users`:
* **E-mail:** `seuemail'@gmail.com`
* **Senha:** 'suasenha'


---

## 🧠 Filosofia de Desenvolvimento e Defesa Técnica

Este projeto foi estruturado seguindo o princípio da **Simplicidade Técnica Confiável**. Toda a arquitetura lógica foi montada utilizando recursos nativos do PHP e do Bootstrap sem a inclusão de bibliotecas de terceiros ou estruturas complexas desnecessárias, garantindo:
- **Transparência Absoluta:** Cada linha de código cumpre um papel exato e auditável.
- **Performance:** Carregamento instantâneo via CDN e consultas diretas ao banco de dados usando PDO.
- **Prevenção de Erros de Interface:** Uso rigoroso de funções nativas de sessão do PHP para controle de mensagens de feedback visual.
