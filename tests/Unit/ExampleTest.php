<?php

namespace Tests\Unit;

use App\Models\UserModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /** @test   */




    public function status()
    {

        $data= [
            'email' => 'test@test.com',
            'name' => 'test'
        ];

        UserModel::insert($data);


        $this->assertDatabaseHas('users', [
            'email' => 'test@test.com',
            'name' => 'test',

        ]);
    }




}
