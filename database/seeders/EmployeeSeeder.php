<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        employee::create([
            'employee_id' => 'YZ00000001',
            'family_name' => '金子',
            'first_name' => '雄紀',
            'section_id' => '2',
            'mail' => 'yuki_kaneko@yaz.co.jp',
            'gender_id' => '1',
        ]);
        employee::create([
            'employee_id' => 'YZ00000002',
            'family_name' => '山田',
            'first_name' => '太郎',
            'section_id' => '1',
            'mail' => 'taro_yamada@yaz.co.jp',
            'gender_id' => '1',
        ]);
        employee::create([
            'employee_id' => 'YZ00000003',
            'family_name' => '鈴木',
            'first_name' => '花子',
            'section_id' => '3',
            'mail' => 'hanako_suzuki@yaz.co.jp',
            'gender_id' => '2',
        ]);
    }
}
