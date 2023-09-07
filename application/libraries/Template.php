<?php
// if (!defined('BASEPATH')) exit('No direct script access allowed');

// class Template
// {
//     var $template_data = array();

//     function set($name, $value)
//     {
//         $this->template_data[$name] = $value;
//     }

//     function load($template = '', $view = '', $view_data = array(), $return = FALSE)
//     {
//         $this->CI = &get_instance();
//         $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
//         return $this->CI->load->view($template, $this->template_data, $return);
//     }
// }

//* End of file Template.php */
//* Location: ./system/application/libraries/Template.php */

// if (!defined('BASEPATH')) exit('No direct script access allowed');
// class Template extends CI_Controller
// {
//     function render_page($content, $data = NULL)
//     {
//         /*
//      * $data['headernya'] , $data['contentnya'] , $data['footernya']
//      * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
//      * */
//         $data['header']      = $this->load->view('template/header', $data, TRUE);
//         $data['sidebar']     = $this->load->view('template/sidebar', $data, TRUE);
//         $data['topbar']      = $this->load->view('template/topbar', $data, TRUE);
//         $data['content']     = $this->load->view($content, $data, TRUE);
//         $data['footer']      = $this->load->view('template/footer', $data, TRUE);
//         $data['Mlogout']     = $this->load->view('templates/modal_bs/Mlogout', $data, TRUE);
//         $data['endofscript'] = $this->load->view('templates/end_of_script', $data, TRUE);


//         $this->load->view('template/index', $data);
//     }
// }

class Template
{
	protected $_ci;

	function __construct()
	{
		$this->_ci = &get_instance();
	}

	function load($content, $data = NULL)
	{
		/*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */

		$data['header']      = $this->_ci->load->view('templates/public/header', $data, TRUE);
		$data['content']     = $this->_ci->load->view($content, $data, TRUE);
		$data['footer']      = $this->_ci->load->view('templates/public/footer', $data, TRUE);

		$this->_ci->load->view('templates/public/index', $data);
	}

	function admin($content, $data = NULL)
	{
		/*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */

		$data['header']      = $this->_ci->load->view('templates/admin/adm_Header', $data, TRUE);
		$data['sidebar']     = $this->_ci->load->view('templates/admin/adm_Sidebar', $data, TRUE);
		$data['topbar']      = $this->_ci->load->view('templates/admin/adm_Topbar', $data, TRUE);
		$data['content']     = $this->_ci->load->view($content, $data, TRUE);
		$data['footer']      = $this->_ci->load->view('templates/admin/adm_Footer', $data, TRUE);

		$this->_ci->load->view('templates/admin/index', $data);
	}
}
