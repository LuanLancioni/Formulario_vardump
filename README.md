# 📄 Projeto Laravel - Formulário, Rollback e var_dump

Este projeto tem como objetivo demonstrar três conceitos fundamentais no desenvolvimento com Laravel: criação de formulários, uso de rollback em rotas e exibição de dados com `var_dump`.

---

## 🧾 1. Formulário Simples

Nesta etapa, criamos um formulário básico utilizando Blade e Bootstrap. O formulário coleta informações como nome, telefone, email, instituição e mensagem.

### 📷 Imagem do formulário
<imagem aqui>

### 🔧 Estrutura do formulário

O formulário utiliza o método `GET` e envia os dados para a rota `index`. Os campos devem conter o atributo `name` para que os dados sejam capturados corretamente.

---

## 🔄 2. Rollback de Rotas

O rollback é utilizado para capturar acessos a rotas inexistentes e redirecionar o usuário para uma rota segura, como a página inicial.

### 📷 Imagem do arquivo `web.php`
<imagem aqui>

### 📷 Exemplo de funcionamento 1
<imagem aqui>

### 📷 Exemplo de funcionamento 2
<imagem aqui>

### 🧠 Explicação

A função `Route::fallback()` é usada para interceptar qualquer rota não definida. Ela pode exibir uma mensagem personalizada e oferecer um link de retorno:

```php
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('index').'">clique aqui</a> para ir para página inicial';
});
