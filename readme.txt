I. Phân tích dự án
    - Frontend
        - Trang chủ
        -  Trang danh sách sản phẩm
        - Trang chi tiết sản phẩm
        - Trang giỏ hàng
        - Trang checkout
        - Trang thanh toán hoàn thành
        - Trang liên hệ
    - Backend
        - Tài khoản người dùng
            Quản lý role (admin, supermode, mod, user)
            Quản lý người dùng: admin/supermode, mod, user
                - hiển thị danh sách thêm, sửa, xóa
            Đăng ký tài khoản
            Đăng nhập
        - Quản lý danh mục sản phẩm
        - Quản lý sản phẩm
        - Quản lý đơn hàng
            Hiển thị danh sách đơn hàng --> (trạng thái đơn hàng)
        - Quản lý phản hồi    
II. Thiết kế database
    1. Bảng role
        - id: int -> khóa chính tự động tăng
        - name: string (varchar) - 20 ký tự
    2. Bảng User
        - id: int -> khóa chính tự động tăng
        - fullname -> string -> 50 ký tự
        - email -> string -> 150 ký tự
        - phone_number -> string -> 20 ký tự
        - address -> string -> 200 ký tự
        - password -> string ->md5 -> 32 ký tự -> chính xác
        - role_id -> int -> foreign key -> role (id)
    3. Bảng danh mục -> category
        - id: int -> khóa chính tự động tăng
        - name: string -> 100 ký tự
    4. Bảng sản phẩm -> product
        - id: int -> khóa chính tự động tăng
        - category_id -> foreign key -> category(id)
        - title -> string -> 300 ký tự
        - price -> int
        - discount: int
        - thumbnail: string -> 500 ký tự
        - description: longtext
        - create_at: datetime -> thời gian tạo
        - update_at: datetime -> thời gian chỉnh sửa
    5. Bảng quản lý galery
        - id: int -> khóa chính tự động tăng
        - product_id -> int -> foreign key ->product(id)
        - thumbnail: string -> 500 ký tự
    6. Bảng quản lý phanr hồi -> feedback
        - id: int -> khóa chính tự động tăng
        - firstname -> string -> 30 ký tự
        - lastname -> string -> 30 ký tự
        - email -> string -> 150 ký tự
        - phone_number -> string -> 20 ký tự
        - subject_name -> string -> 200 ký tự
        - note -> string (varchar) -> độ dài tối đa -> 500 ký tự
    7. Quản lý đơn hàng
        7.1 bảng order
            - id: int -> khóa chính tự động tăng
            - fulname
            - email
            - phone_number
            - address
            - note
            - order_day: datetime -> thời điểm đặt hàng
            - status: int -> (pending, approved, ...)
        7.2 Bảng chi tiết đơn hàng
            - id: int -> khóa chính tự động tăng
            - order_id: int -> foreign key order(id)
            - product_id: int foreign key -> product (id)
            - price: int
            - num: int -> số lượng sản phẩm
            - total_money -> lưu tổng tiền của sản phẩm (price * num)
            