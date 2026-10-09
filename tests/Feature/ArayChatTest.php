<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ArayChatTest extends TestCase
{
    public function test_aray_returns_a_provider_answer(): void
    {
        config()->set('services.deepseek.key', 'test-key');
        Http::fake([
            'api.deepseek.com/*' => Http::response([
                'choices' => [['message' => ['content' => 'Mari kita mulai dari masalah yang ingin dipahami.']]],
            ]),
        ]);

        $this->postJson('/aray/chat', ['message' => 'Bantu saya memahami brand.'])
            ->assertOk()
            ->assertJson(['message' => 'Mari kita mulai dari masalah yang ingin dipahami.']);
    }

    public function test_aray_rejects_an_empty_message(): void
    {
        $this->postJson('/aray/chat', ['message' => ''])
            ->assertUnprocessable()
            ->assertJsonValidationErrors('message');
    }
}
