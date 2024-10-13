<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'over_name' => '山田',
                'under_name' => '太郎',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'タロウ',
                'mail_address' => 'yamada@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1990-01-01',
                'role' => 1, // 教師（国語）
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '鈴木',
                'under_name' => '花子',
                'over_name_kana' => 'スズキ',
                'under_name_kana' => 'ハナコ',
                'mail_address' => 'suzuki@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1991-02-02',
                'role' => 2, // 教師（数学）
                'password' => Hash::make('password456'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '佐藤',
                'under_name' => '次郎',
                'over_name_kana' => 'サトウ',
                'under_name_kana' => 'ジロウ',
                'mail_address' => 'sato@example.com',
                'sex' => 1, // 男性
                'birth_day' => '1992-03-03',
                'role' => 3, // 教師（英語）
                'password' => Hash::make('password789'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '高橋',
                'under_name' => '一郎',
                'over_name_kana' => 'タカハシ',
                'under_name_kana' => 'イチロウ',
                'mail_address' => 'takahashi@example.com',
                'sex' => 3, // その他
                'birth_day' => '1993-04-04',
                'role' => 4, // 生徒
                'password' => Hash::make('password321'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'over_name' => '佐藤',
                'under_name' => '美咲',
                'over_name_kana' => 'サトウ',
                'under_name_kana' => 'ミサキ',
                'mail_address' => 'misaki@example.com',
                'sex' => 2, // 女性
                'birth_day' => '1995-11-22',
                'role' => 4, // 生徒
                'password' => Hash::make('password789'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
