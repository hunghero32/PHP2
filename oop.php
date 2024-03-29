Lập trình hướng đối tượng

Phương pháp lập trình truyền thống
1. Lập trình không có cấu trúc.
Tổng quan:
    - Dành cho người mới bắt đầu học lập trình, không sử dụng hàm
    - Tất cả dòng lệnh đều viết từ trên xuống dưới, dữ liệu được dùng chung 
và tất cả các biến đều ở dạng toàn cục.
Ưu điểm: 
    - Viết code nhanh
    - chương trình chạy nhanh (không phải thông qua giai đoạn gọi hàm, gọi đối tượng)
Nhược điểm:
    - Gặp khó khăn khi xây dựng chương trình lớn(code dài, khó quản lý, bảo trì)
    - khi chương trình có những dòng lệnh được lặp lại thì phải copy thành nhiều chỗ
    và khi sửa thì cần phải sửa các chỗ còn lại 
    - Chỉ viết được các chương trình nhỏ
    - chương trình không khoa học khó sửa chữa bảo trì
    - Chỉ phù hợp cho việc học tập, tính thực tế không cao.
2. Lập trình hướng thủ tục 
Tổng quan:
    - Lấy hàm làm nền tảng cơ bản để xây dựng chương trình, chương trình sẽ được phân nhỏ thành các hàm 
    mỗi hàm có 1 chức năng riêng biệt 
    - Các hàm gọi qua lại lẫn nhau để tạo thành 1 hệ thống của chương trình
    - có thể sử dụng cả biến cục bộ và toàn cục.
Ưu điểm:
    - Dễ quản lý bảo trì 
    - Viết được nhiều chương trình lớn hơn.
Nhược điểm: 
    - Khó hiểu với người mới
    - Các chương trình lớn khó bảo trì 
    - Các đối tượng có thể không đại diện chính xác cho vấn đề cần xử lý. 
    - Bảo mật kém. 

Lập trình hướng đối tượng
    - OOP là phương pháp lập trình hiện đại có ở hầu hết các ngôn ngữ lập trình 
    - Giải quyết được hạn chế của phương pháp lập trình truyền thống 
    - OOP tập trung vào đối tượng để giải quyết vấn đề 
Thành phần chính của OOP:
1. Class 
    - Class dùng để định nghĩa chung cho 1 thực thể(hiểu đơn giản là bản thiết kế)
    - Trong class có thuộc tính (biến), phương thức(hàm)
2. Object 
    - Dùng để thể hiện cụ thể từ class (bản thiết kế)
    => 1 class có thể có 1 hoặc nhiều đối tượng
Tính chất của OOP
    - Tính trừu tượng 
    - Tính kế thừa 
    - Tính đóng gói 
    - Tính đa hình 
Ưu điểm của OOP 
    - Dễ dàng quản lý code khi có sự thay đổi chương trình 
    - Dễ mở rộng dự án 
    - Tiết kiệm được tài nguyên đáng kể cho hệ thống 
    - Có tính bảo mật cao 
    - Có tính tái sự dụng cao 
Nhược điểm:
    - Khó tiếp cận với người mới hoặc những người quen với phương pháp truyền thống 

Class - OBject 
    - Class dùng để định nghĩa chung cho 1 thực thể(hiểu đơn giản là bản thiết kế)
    - Trong class có thuộc tính (biến), phương thức(hàm), hằng số khai báo bằng từ khóa const
    - Hiểu thực tế: class là việc đóng gói biến, hàm, hằng số để sử dụng nó chặt chẽ hơn.

Cú pháp định nghĩa Class: 
    <?php 
        class TenClass{
            visibility $property1;
            visibility $property2;

            const constan1 = value1;
            const constan1 = value1;

            visibility function methodName1(){
                //body
            }
            visibility function methodName2(){
                //body
            }
    
    ?>
Trong đó: 
            - TenClass đặt tên theo quy tắc pascal Case (ký tự đầu mỗi chữ viết hoa)
            - visibility: Phạm vi truy cập 
            - Tên thuộc tính, phương thức đặt tên theo quy tắc camelCase(chữ đầu viết thường,các chữ sau viết
             hoa chữ cái đầu)
            - Tên hằng số viết hoa và nối nhau bằng gạch dưới 
Object: 
            - Là sự thể hiện của class 
            - muốn sử dụng được phương thức, thuộc tính, hằng số trong class thì cần khởi tạo object 
KHởi tạo object: 
            <?php 
                $tenObject = new TenClass();
            ?>
            Với các class không có giá trị khởi thạo có thể sử dụng : 
            <?php 
                $tenObject = new TenClass;
            ?>
Gọi phương thức, hằng số, thuộc tính:
            <?php 
                $tenObject->tenThuocTinh; // gọi thuộc tính
                $tenObject->tenPhuongThuc();// gọi phương thức
                $tenObject::TEN_HANG_SO; // gọi hằng số
                hoặc TenClass::TEN_HANG_SO;
            ?>

Lớp trừu tượng  (Abstract class)
- Khai báo bằng từ khóa abstract phía trước class 
- Phương thức trừu tượng là phương thức được khai báo bằng từ khóa abstract
phía trước từ khóa phạm vi public và protected.
Đặc điểm abstract class: 
            - Phương thức trừu tượng chỉ được phép khai báo và không có nội dung 
            - phương thức trừu tượng chỉ được phép khai báo trong lớp trừu tượng 
            - Lớp trừu tượng có thể có phương thức trừu tượng hoặc không có, nếu không 
            phải phương thức trừu tượng thì vẫn triển khai như phương thức bình thường 
            - không có thuộc tính trừu tượng hày hằng số trừu tượng 
            - không thể khởi tạo đối tượng từ lớp trừu tượng 
            - Phạm vi trong lớp trừu tượng chỉ được khai báo là public và protected.
            - Các lớp kế thừa lớp trừu tượng phải định nghĩa tất cả các phương thức trong lớp 
            trừu tượng đó. 
        Cú pháp lớp trừu tượng: 
        <?php 
            abstract class TenClass{
                // nội dung
            }
        ?>
        Cú pháp phương thức trừu tượng: 
        <?php 
            abstract visibility function tenPhuongThuc();
        ?>
        Ví dụ: 
        <?php 
            abstract class Model{
                abstract public function add();
                abstract public function delete();
            }
        ?>

Inteface template
    - là 1 khuôn mẫu dùng để tạo ra bộ khung cho lớp. 
Đặc điểm:
    - Không phải là class, object, nó là template 
    - trong interface chỉ được phép khai báo phương thức, giống với abstract 
    - Không được phép khai báo thuộc tính, nhưng có thể khai báo hằng số 
    - Không thể khởi tạo đối tượng từ interface 
    - sử dụng interface cần định nghĩa class và implement từ interface đó 
    - các class implements từ interface phải định nghĩa tất cả các phương thức trong 
    interface đó. 
    - 1 class có thể implements nhiều interface 
    - phạm vi trong interface chỉ là public. 
Cú pháp: 
        <?php 
            interface TenInterface{
                const MSG = "";
                public function login();
                public function register();
            }
        
        ?>

Cú pháp implement interface
        <?php 
            class A implements TenInterFace{
                public function login(){

                }
                public function register(){
                    
                }
            }
            
        ?>

Khi nào dùng 
abstract class: 
- chia sẻ phương thức, thuộc tính, hằng số giữa các lớp trong quan hệ kế thừa 
- Muốn class chứa các thành phần private, protected, public

Interface: 
- định nghĩa các chức năng, giá trị chung cho các lớp không có mối liên hệ với nhau. 


Phương thức tĩnh và thuộc tính tĩnh. 
- có thể truy cập trực tiếp mà không cần tạo đối tượng của lớp 
- class là tĩnh nếu tất cả phương thức và thuộc tĩnh là tĩnh 

Cài COMPOSER 

https://getcomposer.org/download/

Lưu ý: cài chọn đến file php.exe

Sau khi cài xong
- gõ cmd kiểm tra phiên bản: composer
chạy:
- mở terminal trỏ đến đúng project
  1. gõ lệnh: composer init
  2. điền package name
  3. mô tả có thể để trống
  4. n
  5. package tpye: project hoặc không
  6. chạy: composer dumpautoload
  7. nếu sửa file composer.jon sử dụng câu lệnh: composer dump-autoload 

  cài đặt thư viện phroute: composer require phroute/phroute

