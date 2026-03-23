<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();//レコードをすべて削除する処理

        $testData = [
        [
            'content' => 'PHP Appセクションを終える',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'content' => 'Laravel Lessonを終える',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];//テストデータ

    DB::table('todos')->insert($testData);//テーブルに実装する処理

    }
}
