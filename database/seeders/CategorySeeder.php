<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => "Đồng hồ",
                'slug' => 'dong-ho',
                'description' => 'Mọi sản phẩm chất lượng liên quan đến đồng hồ',
                'status' => 1
            ],
            [
                'name' => "Máy tính",
                'slug' => 'may-tinh',
                'description' => 'Máy tính với mọi giá ',
                'status' => 1
            ],
            [
                'name' => "Máy ảnh",
                'slug' => 'may-anh',
                'description' => 'Máy ảnh với mọi giá',
                'status' => 1
            ],
            [
                'name' => "Điện thoại",
                'slug' => 'dien-thoai',
                'description' => 'Tổng hợp tất cả các loại điên thoại',
                'status' => 1
            ],
        ];
        foreach ($datas as $data) {
            Category::create($data);
        }
    }
}
