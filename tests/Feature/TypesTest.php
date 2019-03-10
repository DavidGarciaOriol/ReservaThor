<?php

namespace Tests\Feature;

use App\Type;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TypessTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function check_types_list()
    {
        $response = $this->get('/types');
        
        $response->assertSeeText('Type List');
    }
}