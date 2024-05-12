# EnglishBoost: Turbinando seu Inglês com a IA do Google Gemini

Este projeto utiliza o poder da IA do Google Gemini para criar exercícios dinâmicos de inglês personalizados, com base no tema escolhido pelo usuário. Seja para se preparar para provas, entrevistas de emprego, ou simplesmente aprimorar suas habilidades, EnglishBoost te ajuda a alcançar a fluência!

## Funcionalidades

- **Geração de exercícios:** A IA do Google Gemini cria exercícios personalizados, focando na gramática, vocabulário e compreensão, de acordo com o tema escolhido e nível de dificuldade.
- **Temas personalizados:** Escolha o tema que você precisa praticar, seja negócios, viagens, tecnologia, ou qualquer outro!
- **Feedback instantâneo:** Receba feedback imediato sobre suas respostas, identificando seus pontos fortes e áreas que precisam de mais atenção.
- **Interface amigável:** Uma plataforma intuitiva e fácil de usar, para que você possa focar no aprendizado.

## Primeiros Passos com Laravel Sail

EnglishBoost utiliza o Laravel Sail para facilitar a configuração e execução do projeto. Siga estas instruções para começar:

1. **Clone o Repositório:**
    ```bash
    git clone https://github.com/seu-usuario/englishboost.git
    ```

2. **Acesse o Diretório do Projeto:**
    ```bash
    cd englishboost
    ```

3. **Inicie o Laravel Sail:**
    ```bash
    ./vendor/bin/sail up -d
    ```

4. **Instale as Dependências do Projeto:**
    ```bash
    ./vendor/bin/sail composer install
    ```

5. **Gere a Chave da Aplicação:**
    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

6. **Configure as Variáveis de Ambiente:**
    - Crie um arquivo `.env` copiando o `.env.example`
    - Configure as variáveis de ambiente necessárias, incluindo as credenciais da API do Google Gemini.

7. **Execute as Migrações do Banco de Dados:**
    ```bash
    ./vendor/bin/sail artisan migrate
    ```

8. **Acesse a Aplicação:**
    - Abra seu navegador e acesse o endereço [http://localhost](http://localhost).

## Contribuindo com o EnglishBoost

Sinta-se à vontade para contribuir com o projeto! Se você encontrar algum problema, tiver sugestões de melhorias ou quiser adicionar novas funcionalidades, abra uma issue ou envie um pull request.

## Roadmap

- Integração completa com a API do Google Gemini
- Implementação de diferentes níveis de dificuldade
- Sistema de acompanhamento de progresso
- Expansão para outros idiomas

## Entre em Contato

Em caso de dúvidas ou sugestões, entre em contato: mauriciomgp5@gmail.com.

## Licença

Este projeto está licenciado sob a licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter detalhes.
