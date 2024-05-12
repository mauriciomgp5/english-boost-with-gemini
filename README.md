EnglishBoost: Turbinando seu Inglês com a IA do Google Gemini
Este projeto utiliza o poder da IA do Google Gemini para criar exercícios dinâmicos de inglês personalizados, com base no tema escolhido pelo usuário. Seja para se preparar para provas, entrevistas de emprego, ou simplesmente aprimorar suas habilidades, EnglishBoost te ajuda a alcançar a fluência!
Funcionalidades
Geração de exercícios: A IA do Google Gemini cria exercícios personalizados, focando na gramática, vocabulário e compreensão, de acordo com o tema escolhido e nível de dificuldade.
Temas personalizados: Escolha o tema que você precisa praticar, seja negócios, viagens, tecnologia, ou qualquer outro!
Feedback instantâneo: Receba feedback imediato sobre suas respostas, identificando seus pontos fortes e áreas que precisam de mais atenção.
Interface amigável: Uma plataforma intuitiva e fácil de usar, para que você possa focar no aprendizado.
Primeiros Passos com Laravel Sail
EnglishBoost utiliza o Laravel Sail para facilitar a configuração e execução do projeto. Siga estas instruções para começar:
Clone o Repositório:
git clone https://github.com/seu-usuario/englishboost.git
Use code with caution.
Bash
Acesse o Diretório do Projeto:
cd englishboost
Use code with caution.
Bash
Inicie o Laravel Sail:
./vendor/bin/sail up -d
Use code with caution.
Bash
Instale as Dependências do Projeto:
./vendor/bin/sail composer install
Use code with caution.
Bash
Gere a Chave da Aplicação:
./vendor/bin/sail artisan key:generate
Use code with caution.
Bash
Configure as Variáveis de Ambiente:
Crie um arquivo .env copiando o .env.example
Configure as variáveis de ambiente necessárias, incluindo as credenciais da API do Google Gemini.
Execute as Migrações do Banco de Dados:
./vendor/bin/sail artisan migrate
Use code with caution.
Bash
Acesse a Aplicação:
Abra seu navegador e acesse o endereço http://localhost.
Contribuindo com o EnglishBoost
Sinta-se à vontade para contribuir com o projeto! Se você encontrar algum problema, tiver sugestões de melhorias ou quiser adicionar novas funcionalidades, abra uma issue ou envie um pull request.
Roadmap
Integração completa com a API do Google Gemini
Implementação de diferentes níveis de dificuldade
Sistema de acompanhamento de progresso
Expansão para outros idiomas
Entre em Contato
Em caso de dúvidas ou sugestões, entre em contato: mauriciomgp5@gmail.com.
Licença
Este projeto está licenciado sob a licença MIT - consulte o arquivo LICENSE para obter detalhes.