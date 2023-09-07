<?php
class MY_Exceptions extends CI_Exceptions
{
    function MY_Exceptions()
    {
        parent::CI_Exceptions();
    }

    function show_404($page = '')
    {

        $this->config = &get_config();
        $base_url = $this->config['base_url'];

        $_SESSION['error_message'] = 'APLIKASI KEMISKINAN MASIH SEMENTARA BELUM BISA DIAKSES';
        header("location: " . $base_url . 'index.html');
        exit;
    }
}
