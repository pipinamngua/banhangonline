<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call('');
    }
}
class CategoryDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('categories')->insert([
			['name'=>'Điện thoại'],
			['name'=>'Laptop'],
			['name'=>'Tivi'],
		]);
	}
}
class ProductDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('products')->insert([
			['name'=>'Iphone 7','price'=>'7000000','count'=>'100','description'=>'Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.','id_category'=> 1,'id_image'=> 1,'id_config' => 1,'status' => 0 ],
			['name'=>'Laptop Dell Vostro 15 5568 70087069','price'=>'15000000','count'=>'100','description'=>'Laptop Dell Vostro 3559với màn mình to 15.6 inch thoải mái và chip Core i5 là một lựa chọn tốt cho bạn ở mức giá phổ thông.
			Cấu hình đáp ứng đầy đủ nhu cầu
			Dell Vostro 3559 được trang bị chíp core i5 lõi kép đời mới nhất Skylake 2016 (có năng lực vận hành cao hơn 30% so với đời 4, rất phù hợp cho những bạn thích cập nhật công nghệ), cùng khả năng tự động ép xung từ 2,2Ghz lên 2,8Ghz nhờ công nghệ Turbo Boost, bởi vậy laptop bạn cũng bền hơn trước.
			Bạn cũng có thể chạy nhiều tác vụ một lúc, mở nhiều tab trên trình duyệt nhờ dung lượng Ram lớn 4GB với công nghệ chạy đa nhiệm DDR3 và hoàn toàn yên tâm bởi ổ cứng khá 500GB để lưu trữ nhiều tài liệu hơn, đủ chứa hình ảnh cá nhân, video hay ứng dụng.
			Bạn dễ dàng kết nối từ laptop tới máy chiếu nhờ cổng VGA tiện ích. Bạn cũng có được sự linh động cực lớn khi phải sử dụng pin bởi thời gian cho phép bạn dùng mà không cần điện đến 4 tiếng khi lướt web, gõ văn bản.','id_category'=> 2,'id_image'=> 2,'id_config' => 2,'status' => 0 ],
			['name'=>'Tivi Toshiba 32 inch 32L3750','price'=>'20000000','count'=>'100','description'=>'Toshiba L3750VN là thế hệ tivi mới thuộc series L37 của Toshiba hướng đến thiết kế tối giản nhưng cao cấp và sang trọng. Tivi Toshiba L3750VN cho phép người dùng tận hưởng cảm xúc một cách trọn vẹn với công nghệ hình ảnh Essential PQ giúp tái tạo màu sắc rực rỡ, độ sáng hoàn hảo, độ tương phản chính xác cùng với khả năng tái hiện những hình ảnh chuyển động sắc nét. Bên cạnh đó, người xem sẽ được trải nghiệm chất lượng âm thanh trung thực nhất, nhờ vào hệ thống loa được thiết kế mới, kết hợp công nghệ âm thanh vòm DTS TruSurround mang đến trải nghiệm âm thanh không giới hạn. Ngoài ra, tivi còn đến với chuẩn kết nối MHL cho phép bạn xem mọi nội dung từ điện thoại trên một màn hình lớn, cổng kết nối này cũng kiêm luôn chức năng sạc cho điện thoại để bạn tận hưởng trọn vẹn những nội dung yêu thích mà không lo bị gián đoạn vì hết pin.

			Đẳng cấp đỉnh cao của vẻ đẹp tối giản
			Thiết kế Lounge Style Concept mang lại một trải nghiệm nghe nhìn thoải mái hơn trong một thiết kế tối giản. Thiết kế dựa trên không gian sống, tôn vinh sự tao nhã, thanh lịch, hòa hợp với từng đường nét của căn phòng bạn.

			Màu sắc rực rỡ hơn bao giờ hết
			Trải nghiệm trọn vẹn từng khoảnh khắc nhờ vào công nghệ tạo hình CEVO Engine của Toshiba. Công nghệ này sẽ phân tích và tinh chỉnh giúp tái tạo hình ảnh chi tiết hơn và sâu hơn, khiến cho mọi thứ từ màn ảnh tivi sẽ sống động và chân thật.','id_category'=> 3,'id_image'=> 3,'id_config' => 3,'status' => 0 ]
		]);
	}
}
class ImageDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('images')->insert([
			['image_name1' => 'Iphone-7(1).jpg']
			['image_name2' => 'Iphone-7(2).jpg'],
			['image_name3' => 'Iphone-7(3).jpg'],
			['image_name4' => 'Iphone-7(4).png']
		]);
	}
}


