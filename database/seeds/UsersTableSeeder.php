<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Pepito Perez',
            'email' => 'test@test1.com',
            'password' => 'test123',
        ]);

        $products_1 = [
            ['product_id' => 1, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 3, 'user_id' => $user1->id, 'quantity' => 2],
            ['product_id' => 4, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 2, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 6, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 12, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 8, 'user_id' => $user1->id, 'quantity' => 1],
            ['product_id' => 9, 'user_id' => $user1->id, 'quantity' => 1]
        ];

        \App\UserProduct::insert($products_1);

        $user2 = User::create([
            'name' => 'Monica Ramirez',
            'email' => 'test@test2.com',
            'password' => 'test123',
        ]);

        $products_2 = [
            ['product_id' => 3, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 11, 'user_id' => $user2->id, 'quantity' => 5],
            ['product_id' => 4, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 2, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 6, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 8, 'user_id' => $user2->id, 'quantity' => 1],
            ['product_id' => 7, 'user_id' => $user2->id, 'quantity' => 1]
        ];

        \App\UserProduct::insert($products_2);

        $user3 = User::create([
            'name' => 'John Smith',
            'email' => 'test@test3.com',
            'password' => 'test123',
        ]);

        $products_3 = [
            ['product_id' => 3, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 11, 'user_id' => $user3->id, 'quantity' => 5],
            ['product_id' => 4, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 2, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 6, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 8, 'user_id' => $user3->id, 'quantity' => 1],
            ['product_id' => 7, 'user_id' => $user3->id, 'quantity' => 1]
        ];

        \App\UserProduct::insert($products_3);

        $user4 = User::create([
            'name' => 'Carlos Merino',
            'email' => 'test@test4.com',
            'password' => 'test123',
        ]);

        $products_4 = [
            ['product_id' => 4, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 12, 'user_id' => $user4->id, 'quantity' => 5],
            ['product_id' => 11, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 10, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 6, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 3, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 2, 'user_id' => $user4->id, 'quantity' => 1],
            ['product_id' => 1, 'user_id' => $user4->id, 'quantity' => 1]
        ];

        \App\UserProduct::insert($products_4);

        $user5 = User::create([
            'name' => 'Lisa Smith',
            'email' => 'test@test5.com',
            'password' => 'test123',
        ]);

        $products_5 = [
            ['product_id' => 1, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 2, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 3, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 4, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 5, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 7, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 8, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 10, 'user_id' => $user5->id, 'quantity' => 1],
            ['product_id' => 12, 'user_id' => $user5->id, 'quantity' => 1]
        ];

        \App\UserProduct::insert($products_5);

    }
}
