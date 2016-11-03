<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct() {
	 	parent::__construct();
	 	
	 	 log_message('error', 'home');
	 	if ($this->session->userdata('admin') == null) {
	 		$ref = '';
	 		if (isset($_GET['ref'])) 
	 			$ref = '?ref='.$_GET['ref'];
	 		redirect('login'.$ref);
	 		
	 	}
	 		
	 	$this->load->library('pagination');
	 	$this->load->model('Invoice_model');
	 	$this->load->model('Transaction_model');
	 	$this->load->model('Outlet_model');
	 	$this->load->model('Product_model');
	 }

	 function rounds() {
	 	$amt = 2.08;
	 	
	 	echo number_format($this->rndfunc($amt),2);
	 }
	 
	 function rndfunc($x){
	  return round($x * 2, 1) / 2;
	}
	
	 
	 function index() {
	  
	 	$data['title'] = TITLE;
		$data['subtitle'] = 'Summary';
		$data['caption'] = '';
		$data['active'] = 1;
		
// 		print_r($_POST);exit;
		$from = isset($_POST['from']) && $_POST['from'] != '' ? date('Y-m-d 00:00:00', strtotime($_POST['from'])) : date('Y-m-d 00:00:00');
		$to = date('Y-m-d 23:59:59', strtotime($from));
		$top_sales = $this->Transaction_model->topProductsSales($from, $to, 5);
		$data['load_datepicker'] = 1;
		
		$data['hourly'] = $this->Transaction_model->hourlySalesAmount(date('Y-m-d', strtotime($from)));
// 		print_r($from);exit;
		$data['from'] = $from;
		$terminal_id = isset($_POST['terminal_id']) && $_POST['terminal_id'] != 0 ? $_POST['terminal_id'] : null;
		$out_id = isset($_POST['out_id']) && $_POST['out_id'] != 0 ? $_POST['out_id'] : null;
		
		$data['out_id'] = $out_id != null ? $out_id : 0;
		$data['terminal_id'] = $terminal_id != null ? $terminal_id : 0;
		
		$report =	$this->Transaction_model->getReport($terminal_id, $from, $to, $out_id);
// 		echo '<pre>';
// print_r($report);exit;
		$data['report'] = $report;
		$data['top_sales'] = $top_sales;
		$data['from'] = $from;
		//get all outlet
		$data['outlets'] = $this->Outlet_model->getAllOutlets();
		
		$this->load->view('report/index', $data);
	 }
	 
	 function getTerminal() {
	 	if (isset($_POST['out_id']) && $_POST['out_id'] != '') {
	 	
	 		$terms = $this->Outlet_model->getTerminalForOutlet($_POST['out_id']);
	 		$data = '';
	 		if (count($terms) > 0) {
	 			foreach ($terms as $t) {
	 				$data .= '<option value="'.$t->{'t_id'}.'">'.$t->{'t_name'}.'</option>';
	 			}
	 		}
	 		header('Content-Type: application/json');
	 		echo json_encode(array('html'=>$data));
	 	}
	 }	
	 
	function history() {
		$data['title'] = TITLE;
		$data['subtitle'] = 'Transactions';
		$data['caption'] = 'Transaction History';
		$data['active'] = 1;
		
		$per_page = RESULT_PER_PAGE;
		$data['per_page'] = $per_page;
		
		$limit = $per_page;
		$offset = 0;
		
		$search = null;
		if (isset($_GET['search']) && $_GET['search'] != '') {
			$search = $_GET['search'];
		}

		if (isset($_GET['p']) && $_GET['p'] != '') {
			$offset = ($_GET['p'] -1) * $per_page;
		}
		else if (isset($_GET['p']) && $_GET['p'] == '')
			$offset = 0;
			
		$qStr = $_GET;
		if (isset($qStr['p']))
			unset($qStr['p']);
			
		$sort = null;
		
		$from = isset($_GET['from']) && $_GET['from'] != '' ? date('Y-m-d 00:00:00', strtotime($_GET['from'])) : date('Y-m-d 00:00:00');
		$to = date('Y-m-d 23:59:59', strtotime($from));
		$top_sales = $this->Transaction_model->topProductsSales($from, $to, 5);
		$data['load_datepicker'] = 1;
	
		$terminal_id = isset($_GET['terminal_id']) && $_GET['terminal_id'] != 0 ? $_GET['terminal_id'] : null;
		$out_id = isset($_GET['out_id']) && $_GET['out_id'] != 0 ? $_GET['out_id'] : null;
		
		$data['out_id'] = $out_id != null ? $out_id : 0;
		$data['terminal_id'] = $terminal_id != null ? $terminal_id : 0;
		$data['from'] = $from;
		
		//get all outlet
		$data['outlets'] = $this->Outlet_model->getAllOutlets();
		$data['outlets_detail'] = $this->Outlet_model->getOutletsWithId();
		$data['products_detail'] = $this->Product_model->getProductsWithId();
		
		$data['history'] = $this->Transaction_model->getAllTransactions($out_id, $terminal_id,$offset, $limit, $from, $to, $sort, $search);
		
		$config['base_url'] = base_url().'home/history?'.http_build_query($qStr);
		$config['total_rows'] = count($this->Transaction_model->getAllTransactions($out_id, $terminal_id,null,null, $from, $to, $sort, $search));
		$config['per_page'] = $per_page; 
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'p';
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['firad_link'] = '&laquo; First';
		$config['firad_tag_open'] = '<li>';
		$config['firad_tag_close'] = '</li>';

		$config['laad_link'] = 'Last &raquo;';
		$config['laad_tag_open'] = '<li>';
		$config['laad_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li><span>';
		$config['cur_tag_close'] = '</span></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['page_query_string'] = TRUE;
		
		$this->pagination->initialize($config); 
		
		$data['total'] = $config['total_rows'];
		
		$this->load->view('report/history', $data);
	}
	
	function exportLog() {
		$this->load->library('excel');
	 
	 	$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->setCreator("Singapore Data Hub Pte Ltd");
		$objPHPExcel->getProperties()->setTitle("Inventory");
		$objPHPExcel->getProperties()->setSubject("TAG Inventory");
		$objPHPExcel->getProperties()->setDescription("TAG Inventory");

		if (isset($_GET['from']) && isset($_GET['to'])) {
			$from = isset($_GET['from']) && $_GET['from'] != '' ? date('Y-m-d 00:00:00', strtotime($_GET['from'])) : null;
			$to = isset($_GET['to']) && $_GET['to'] != '' ? date('Y-m-d 23:59:59', strtotime($_GET['to'])) : null;
			$prod_id = isset($_GET['prod_id']) && $_GET['prod_id'] != '' ? $_GET['prod_id'] : null;
		
		
			$logs = $this->Inventory_model->getAllLog(null, null, $from, $to, 'invl_created_date desc', null, $prod_id);
			
			// echo '<pre>';
// 			
// 			print_r($logs);exit;
			
			$objPHPExcel->createSheet();
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setTitle('Inventory Log');
			
			$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Date/Time');
			$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'SKU');
			$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Product');
			$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Stock In');
			$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Stock Out');
			$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Tranfer');
			$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Manual Update');
			
			
			$objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Qty.');
			$objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Source');
			$objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Destination');
			$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Src. Balance');
			$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Dest. Balance');
			$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Remarks');
			$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'ref');
		
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
			
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(50);
			
		
			if (count($logs) > 0) {
				$j = 2;
				foreach ($logs as $log) {
					$src = $this->Outlet_model->getOutlet($log->{'src'});
					$srcName = isset($src->{'out_name'}) ? $src->{'out_name'} : '';
					$dest = $this->Outlet_model->getOutlet($log->{'dest'});
					$destName = isset($dest->{'out_name'}) ? $dest->{'out_name'} : '';
					
					$srcBal = $this->Inventory_model->getBalanceForLog($log->{'src'}, $log->{'invl_id'});
					$destBal = $this->Inventory_model->getBalanceForLog($log->{'dest'}, $log->{'invl_id'});
				
					if ($srcBal != '')
						$srcBal = number_format($srcBal, 3,'.',',');
					if ($destBal != '')
						$destBal = number_format($destBal, 3,'.',',');
						
					$type = '';
					if ($log->{'type'} == 1)
						$type = 'Stock In';
					else if ($log->{'type'} == 2)
						$type = 'Stock Out';
					else if ($log->{'type'} == 0) {
						$type = 'Stock Refill Level Adjustment';
					}
					else if ($log->{'src'} != $log->{'dest'})
						$type = 'Transfer';
					
					$updatefrom = '';
					if ($log->{"method"} == 1)
						$updatefrom = 'Manual Inventort Adjustment - ';
					else if ($log->{"method"} == 2)
						$updatefrom = 'POS ';
					else if ($log->{"method"} == 3)
						$updatefrom = 'iPad ';
					else if ($log->{"method"} == 4)
						$updatefrom = 'QuickBooks ';
				
				
					$prod_name = '';
					$prod = $this->Inventory_model->getProductBySKU($log->{'sku'});
					if (count($prod) > 0) {
						$prod_name = $prod->{'prod_name'};
					}	
					
					$objPHPExcel->getActiveSheet()->SetCellValue('A'.($j), $log->{'invl_created_date'});
					$objPHPExcel->getActiveSheet()->SetCellValue('B'.($j), $log->{'sku'});
					$objPHPExcel->getActiveSheet()->SetCellValue('C'.($j), $prod_name);
					
					if ($log->{'type'} == 1) {
						$objPHPExcel->getActiveSheet()->SetCellValue('D'.($j), $updatefrom.$type);
						$objPHPExcel->getActiveSheet()->SetCellValue('E'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('F'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('G'.($j), '-');
					}
					else if ($log->{'type'} == 2) {
						$objPHPExcel->getActiveSheet()->SetCellValue('D'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('E'.($j), $updatefrom.$type);
						$objPHPExcel->getActiveSheet()->SetCellValue('F'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('G'.($j), '-');
					}
					else if ($log->{'type'} == 0) {
						$objPHPExcel->getActiveSheet()->SetCellValue('D'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('E'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('F'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('G'.($j), $updatefrom.$type);
					}
					else  {
						$objPHPExcel->getActiveSheet()->SetCellValue('D'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('E'.($j), '-');
						$objPHPExcel->getActiveSheet()->SetCellValue('F'.($j), $updatefrom.$type);
						$objPHPExcel->getActiveSheet()->SetCellValue('G'.($j), '-');
					}
					
					$objPHPExcel->getActiveSheet()->SetCellValue('H'.($j), number_format($log->{'units'},3,'.',','));
					$objPHPExcel->getActiveSheet()->SetCellValue('I'.($j), $srcName);
					$objPHPExcel->getActiveSheet()->SetCellValue('J'.($j), $destName);
					$objPHPExcel->getActiveSheet()->SetCellValue('K'.($j), $srcBal);
					$objPHPExcel->getActiveSheet()->SetCellValue('L'.($j), $destBal);
					$objPHPExcel->getActiveSheet()->SetCellValue('M'.($j), $log->{'invl_desc'});
					$objPHPExcel->getActiveSheet()->SetCellValue('N'.($j), $log->{'invl_id'});
					
					
					$j++;
				
				}
			}
		}
		
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$filename = 'inventory_log.xls';
// 		$objWriter->save();
		
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
					 
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
		$objWriter->save(EXCEL_PATH.$filename);
	}
	
	public function crmsales()
	{
		$data['title'] = TITLE;
		$data['subtitle'] = 'Dashboard';
		$data['active'] = 1;
		
		$sales= array();
		for ($i = 1; $i <= 12; $i++) {
			$date = date('Y-'.str_pad($i,2,'0', STR_PAD_LEFT).'-d');
// 			print_r($date);exit;
			$from = date('Y-m-01 00:00:00', strtotime($date));
			$to = date('Y-m-t 23:59:59:59', strtotime($date));
			$total = $this->Invoice_model->totalSales($from, $to)->{'total'};
			
			$sales[$i] = $total != '' ? round($total,2) : 0;
		}
		// echo '<pre>';
// 		print_r($sales);exit;
		$data['sales'] = $sales;
		
		$weeklysales = array();
		// set current date
		$date = date('Y-m-d');
		// parse about any English textual datetime description into a Unix timestamp
		$ts = strtotime($date);
		// calculate the number of days since Monday
		$dow = date('w', $ts);
		$offset = $dow - 1;
		if ($offset < 0) {
			$offset = 6;
		}
		// calculate timestamp for the Monday
		$ts = $ts - $offset*86400;
		// loop from Monday till Sunday
		for ($i = 1; $i <= 7; $i++, $ts += 86400){
// 			print date("Y-m-d", $ts) . "\n";
// 			print_r(date("Y-m-d",strtotime('monday this week')));
// 			date("d m Y",);
			$date = date("Y-m-d", $ts);
			$from = date('Y-m-d 00:00:00', strtotime($date));
			$to = date('Y-m-d 23:59:59:59', strtotime($date));
			$total = $this->Invoice_model->totalSales($from, $to)->{'total'};
			
			$weeklysales[$i] = $total != '' ? round($total,2) : 0;
		}	
		
// 		print_r($weeklysales);exit;
		$data['weekly'] = $weeklysales;
		$this->load->view('index', $data);
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('home');
	}
	
	function backtopos() {
		$location =$this->session->userdata('ref');
		$this->session->sess_destroy();
		header('Location: '.$location);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */