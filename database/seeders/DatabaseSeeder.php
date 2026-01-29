<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'susanoo',
            'email' => 'susanoo@example.com',
            'password' => 'password',
            'email_verified_at' => '2026-01-22 00:00:00',
        ]);
        User::create([
            'name' => 'rainyrook',
            'email' => 'rainyrook@example.com',
            'password' => 'password',
            'email_verified_at' => '2026-01-22 00:00:00',
        ]);

        Work::create(['name' => 'プログラミング講習',]);
        Work::create(['name' => 'PC設定',]);

        Pref::create(['name' => '北海道',]);
        Pref::create(['name' => '青森県',]);
        Pref::create(['name' => '岩手県',]);
        Pref::create(['name' => '宮城県',]);
        Pref::create(['name' => '秋田県',]);
        Pref::create(['name' => '山形県',]);
        Pref::create(['name' => '福島県',]);
        Pref::create(['name' => '茨城県',]);
        Pref::create(['name' => '栃木県',]);
        Pref::create(['name' => '群馬県',]);
        Pref::create(['name' => '埼玉県',]);
        Pref::create(['name' => '千葉県',]);
        Pref::create(['name' => '東京都',]);
        Pref::create(['name' => '神奈川県',]);
        Pref::create(['name' => '新潟県',]);
        Pref::create(['name' => '富山県',]);
        Pref::create(['name' => '石川県',]);
        Pref::create(['name' => '福井県',]);
        Pref::create(['name' => '山梨県',]);
        Pref::create(['name' => '長野県',]);
        Pref::create(['name' => '岐阜県',]);
        Pref::create(['name' => '静岡県',]);
        Pref::create(['name' => '愛知県',]);
        Pref::create(['name' => '三重県',]);
        Pref::create(['name' => '滋賀県',]);
        Pref::create(['name' => '京都府',]);
        Pref::create(['name' => '大阪府',]);
        Pref::create(['name' => '兵庫県',]);
        Pref::create(['name' => '奈良県',]);
        Pref::create(['name' => '和歌山県',]);
        Pref::create(['name' => '鳥取県',]);
        Pref::create(['name' => '島根県',]);
        Pref::create(['name' => '岡山県',]);
        Pref::create(['name' => '広島県',]);
        Pref::create(['name' => '山口県',]);
        Pref::create(['name' => '徳島県',]);
        Pref::create(['name' => '香川県',]);
        Pref::create(['name' => '愛媛県',]);
        Pref::create(['name' => '高知県',]);
        Pref::create(['name' => '福岡県',]);
        Pref::create(['name' => '佐賀県',]);
        Pref::create(['name' => '長崎県',]);
        Pref::create(['name' => '熊本県',]);
        Pref::create(['name' => '大分県',]);
        Pref::create(['name' => '宮崎県',]);
        Pref::create(['name' => '鹿児島県',]);
        Pref::create(['name' => '沖縄県',]);

    }
}
