<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password'=> 'password'
            
        ]);

            $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
            $response = $this->post('/login/create', [
            'name' =>'faker',
            'email' => 'faker@faker.com',
            'password' => '123456789',
        ]);

        $response ->assertStatus(200);
    }
    public function test_create_user_admin()
    {
            $response = $this->post('/login/create', [
            'name' =>'Admin',
            'email' => 'Admin@master.com',
            'password' => '123456789',
            'is_admin' => 1,
        ]);

        $response ->assertStatus(200);

    }
        public function check_Columns_user_is_correct()
        {
            $user = new User();
            
            $expected = [
                'name',
                'email',
                'passsword'
            ];

            $arrayCompared = array_diff($expected, $user->getFillable());
            $this->assertEquals(0, count($arrayCompared));
        }


            
 }
    