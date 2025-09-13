#  Projeto Laravel - Formulário, Rollback e var_dump

Este projeto tem como objetivo demonstrar três conceitos fundamentais no desenvolvimento com Laravel: criação de formulários, uso de rollback em rotas e exibição de dados com `var_dump`.

---

##  1. Formulário

Nesta etapa, criamos um formulário básico utilizando Blade e Bootstrap. O formulário coleta informações como nome, telefone, email, instituição e mensagem.

### Imagem do formulário
<img width="1915" height="1020" alt="image" src="https://github.com/user-attachments/assets/7bf53099-bd74-4324-9fb6-517ea4758c22" />


###  Estrutura do formulário

O formulário utiliza o método `GET` e envia os dados para a rota `index`. Os campos devem conter o atributo `name` para que os dados sejam capturados corretamente.

---

##  2. Rollback de Rotas

O rollback é utilizado para capturar acessos a rotas inexistentes e redirecionar o usuário para uma rota segura, como a página inicial.

###  Imagem do arquivo `web.php`
<img width="968" height="565" alt="image" src="https://github.com/user-attachments/assets/1015abce-abc2-4cd3-9c79-b42baa5b16da" />


###  Exemplo de funcionamento 1
<img width="1919" height="1012" alt="image" src="https://github.com/user-attachments/assets/bee12674-f46f-4ec5-b296-1ddadd806f1e" />


###  Exemplo de funcionamento 2
<img width="1913" height="1030" alt="image" src="https://github.com/user-attachments/assets/64a258ea-4f87-4490-9c4f-acaa9b962e88" />


###  Explicação

A função `Route::fallback()` é usada para interceptar qualquer rota não definida. Ela pode exibir uma mensagem personalizada e oferecer um link de retorno para a página inicial

--

### 3. Var_Dump

Nesta parte, usamos var_dump() para inspecionar os dados enviados pelo formulário. Isso é útil para testes e depuração.

###  Imagem do controller
<img width="1053" height="543" alt="image" src="https://github.com/user-attachments/assets/ac0c5de7-0750-4a01-b52b-6727468e984b" />


###  Imagem do funcionamento 1
<img width="1919" height="1013" alt="image" src="https://github.com/user-attachments/assets/3a6325cc-d1dd-4a86-89a8-c1a0ec4231c9" />


###  Imagem do funcionamento 2
<img width="1919" height="1015" alt="image" src="https://github.com/user-attachments/assets/06aad0ce-dcb4-44be-b96a-808cb4cd974a" />
