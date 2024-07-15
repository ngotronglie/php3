DOCS

Xây dựng web bán quần áo LARAVEL	
 -Trang frontend:
 -  Hiển thị danh mục quần áo, quần áo, banner marketing, khuyến mại
 - Giỏ hàng, Thanh toán online, gửi email hóa đơn
 -Trang quản trị:
 - Đăng nhập, tạo tài khoản
 - Phân quyền (admin, nhân viên)
 - Quản lý danh mục quần áo
 - Quản lý quần áo
 - Quản lý khuyến mại
 - Quản lý banner marketing
 - Quản lý hóa đơn, in hóa đơn




### How to use the Laravel application 
----

#### - Create migration

```
php artisan make:migration <name>['create_danh_muc_table']
```

#### - Build migration

```

php artisan migrate

```

----
#### - Create Seeder

```
php artisan make:seeder <'name class'> ['DanhMucSeeder']
```

#### - Build Seeder 

```
php artisan db:seed --class=<'name class'> [DanhMucSeeder]

```
----

#### - Create Controller

```

php artisan make:controller <class Controller> ['SanPhamController']   --resource
----
```

#### - Create Model 

```
php artisan make:model <name class >['SanPham]
```

---- 
install faker 

```
composer require fakerphp/faker
```
--- 
#### 
chuyen file anh len folder public storage / uploads/ ....

```
php artisan storage:link
```