<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/08/2019
 * Time: 19:28
 */
class Student {
    public  $name = "nguyen van an";

    public function getInfo() {
        echo "<br>" . __METHOD__;
        echo "<br>" . $this->name;
    }
}

class Student2 {
    public static $name = "nguyen van an";


    /**
     * Trong 1 method static thì không được sử dụng từ khóa $this
     * để gọi đến chính bản thân class đó
     * mà phải sử dụng từ khóa self
     * Khi muốn gọi đến 1 method hay 1 thuộc tính được khai báo static
     * self::$tên_thuộc_tính và self::tên_phương_thức()
     * chú ý là trong class thường khi truy cập đến thuộc tính $this->tên thuộc tính(không có $)
     * ví dụ $this->name
     * nhưng trong method static thì khi gọi đến thuộc tính static ví dụ
     * self::$name
     */
    public static function getInfo() {
        echo "<br>" . __METHOD__;
        //echo "<br>" . $this->name;

        echo "<br>" . self::$name;
        echo "<br>" . self::getInfo2();

    }

    public static function getInfo2() {
        echo "<br>" . __METHOD__;
    }
}

/**
 * Tại sao phải sử dụng từ khóa static?
 * khi mà muốn gọi 1 method hay 1 cái thuộc tính từ class ở bên ngoài class đó
 * thì luôn phải khởi tạo 1 object đối tượng của class đó
 */

$student = new Student();
$student->getInfo();

/**
 * Khi sử dụng từ khóa static cho thuộc tính và phương thức
 * thì không cần thiết phải khởi taon đối tượng
 */

echo "<br>" . Student2::$name;
Student2::getInfo2();
Student2::getInfo2();

