<?php

use Google\Cloud\Gemini\V1\GeminiClient;

class GeminiService
{

    private $geminiClient;

    public function __construct()
    {
        $this->geminiClient = new GeminiClient();
    }

    public function gerarExercicio(string $tema): string
    {
        // Lógica para chamar a API Gemini e gerar o exercício
        $response = $this->geminiClient->generateText([
            // parâmetros da requisição, a serem definidos pela API do Gemini
            'prompt' => "Crie um exercício de inglês sobre $tema"
        ]);

        return $response->getText();
    }
}
