  function debug_output() {

    global $wpdb;
    echo "
";
    print_r(  $wpdb->queries );
    echo "
";
  
  }
  add_action( "wp_footer", "debug_output"  );
