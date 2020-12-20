# Wordpress_Debug_show_query_on_pages
Trong thư mục:

wp-config.php
// Hiển thị các câu truy vấn trên cùng một trang của WP
```
define("SAVEQUERIES", true);
```
Tiếp ở functions.php đối với theme, ở plugin bỏ ở đâu tùy bạn:
```
functions.php
  function debug_output() {
    global $wpdb;
    echo "
";
    print_r(  $wpdb->queries );
    echo "
";
  
  }
  add_action( "wp_footer", "debug_output"  );
```

Kết quả:

```
Array(
  [0] => Array(
    [0] => SELECT option_name, option_value FROM wp_options WHERE autoload = "yes"
    [1] => 0.001 ( speed query )
    [2] => require(''wp-blog-header.php), .... ( các file liên quan )
    [3] => 157, ..... 
    [4] => Array (
    
    )
  )
)
```

Trong đó: có câu truy vấn, tốc độ, các file liên quan bla bla .... Mấy bạn tìm hiểu thêm.
