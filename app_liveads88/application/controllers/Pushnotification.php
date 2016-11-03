<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * Flashnews Module
  *
  * This module is for flashnew function.
  *	@EI EI 
  * @return void
  */
class Pushnotification extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Pushnotification_model');
		$this->load->library(array('form_validation','session','pagination'));
        $this->load->helper(array('url','html','form'));
	}
	
	 /**
    * Add  flashnews list
    * @Ei
    */
	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/notification/list');
		$this->load->view('admin/footer');
	}
	
	
	 /**
    * Add about flashnews datatable
    * @Ei
    */
	public function pushnotification_datatable(){
		$requestData= $_REQUEST;
 
		$columns = array( 
			0 =>'pn_msg',	
			1 =>'pn_created_date',	
			);	
			
		$sql = "SELECT
				*
				";
		$sql.=" FROM
				`push_notifications` WHERE 1=1
				";
		if( !empty($requestData['search']['value']) ) {  
			$sql.=" AND ( pn_msg LIKE '".$requestData['search']['value']."%' )";    
		}
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";

		$query = $this->db->query($sql);
		//print_r($query->result());
// 		$recordsFiltered = $this->db->query("SELECT FOUND_ROWS()")->row(0)->{"FOUND_ROWS()"}; 
		//echo $recordsFiltered;
		$resTotalLength = $this->db->query(
			"SELECT COUNT(*) as rowcount FROM push_notifications"

		);
		$recordsTotal = $resTotalLength->row()->rowcount;
		$recordsFiltered = $recordsTotal;
		$result = $query->result_array();
		$result_array = array();
		foreach ($result as $key => $row) {
			$tmpentry = array();
			$tmpentry[] = $row['pn_msg'];
			$tmpentry[] = $row['pn_created_date'];
			$tmpentry[] = "<a href='".base_url()."pushnotification/update/".$row['pn_id']."' class='btn btn-info'>Edit</a><a href='".base_url()."pushnotification/deleteMsg/".$row['pn_id']."' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>";			

			$result_array[] = $tmpentry;
		}
		
		/*
		 * Output
		 */
		$output = array(
			"draw"            => intval( $_GET['draw'] ),
			"recordsTotal"    => intval( $recordsTotal ),
			"recordsFiltered" => intval( $recordsFiltered ),
			"data"            => ($result_array)
		);
		print_r(json_encode($output));
		exit();
	}
	
	/**
	  *  add event
	  *
	*/
	public function add()
	{

		if($this->input->server('REQUEST_METHOD') == 'POST'){
			 //form validation			
			$this->form_validation->set_rules('pn_msg', ' Message', 'trim|required');
// 			$this->form_validation->set_rules('fn_expired', ' Expired', 'trim|required');	

			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if($this->form_validation->run()==FALSE){
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/notification/add');
				$this->load->view('admin/footer');
			}else{		
						 
				 $data_to_store = array(
					'pn_msg' => $this->security->xss_clean($this->input->post('pn_msg')),
					'pn_created_date'=>date('Y-m-d H:i:s')
// 					'fn_expired' => $this->security->xss_clean($this->input->post('fn_expired')),
		
				);
				
				
				if($this->Pushnotification_model->addPushNotification($data_to_store)){
					$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully added</div>');
				}
				$this->sendNotification();
				
				
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/notification/add');
				$this->load->view('admin/footer');
			}
			
		}else{
			
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/notification/add');
			$this->load->view('admin/footer');
		}
	}
	
	
	/**
	  * update job
	  *
	*/
	public function update(){
		$id = $this->uri->segment(3);
		if(!is_numeric($id)){
			redirect('pushnotification');
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$this->form_validation->set_rules('pn_msg', ' Message', 'trim|required');
// 			$this->form_validation->set_rules('fn_expired', ' Expired', 'trim|required');	
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
			if ($this->form_validation->run())
			{    
						 
				 $data_to_store = array(
					'pn_msg' => $this->security->xss_clean($this->input->post('fn_text')),
					'pn_created_date' => date('Y-m-d H:i:s'),
		
				);
				//if the insert has returned true then we show the flash message
				if($this->Pushnotification_model->updateNotification($id, $data_to_store) == TRUE){
					$this->session->set_flashdata('flash_message', 'updated');
				}else{
					$this->session->set_flashdata('flash_message', 'not_updated');
				}
				redirect('pushnotification/update/'.$id.'');

			}//validation run

		}

		if($data['flashnews'] = $this->Pushnotification_model->getNotificationById($id)){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/notification/update',$data);
			$this->load->view('admin/footer');	
		}else{
			redirect('pushnotification');
		}
		//print_r($data);
		//load the view
		
	}
	
	
	/**
    * delete event
    * @Ei
    */
	function deleteMsg()
    {
        //product id 
        $id = $this->uri->segment(3);
		$this->Pushnotification_model->deleteNotification($id);       
        redirect('pushnotification');
    }
    
    //run with cron or immediate send
    function sendNotification() {
    
    	$sql = "select * from push_notifications where pn_sent =0 order by pn_created_date asc limit 1";
    	$data = $this->Pushnotification_model->fetchResult($sql, true);
    	if (count($data) > 0) {
    		$msg = $data->{'pn_msg'};
    		
    		// ios
//     		$sql = "select * from push_token where platform = 1 and token != ''";
//     		$ios = $this->Pushnotification_model->fetchResult($sql, false);
//     		if (count($ios) > 0) {
//     			$device_tokens = array();
//     			foreach ($ios as $token) {
//     				$device_tokens[] = $token->{'token'};
//     			}
//     			$this->ios(array('msg'=>$msg), $device_tokens);
//     			
//     		}
//     		
//     		android
//     		$sql = "select * from push_token where platform = 2 and token != ''";
//     		$android = $this->Pushnotification_model->fetchResult($sql, false);
//     		if (count($android) > 0) {
//     			$register_ids = array();
//     			foreach ($android as $token) {
//     				$register_ids[] = $token->{'token'};
//     				log_message('error', $token->{'token'});
//     			}
//     			$this->android(array('title'=>'','msg'=>$msg), $register_ids);
//     			
//     		}
    		
    		$id = $data->{'pn_id'};
    		$sql = "update push_notifications set pn_sent = 1 where pn_id = $id";
    		$this->db->query($sql);
    		
    		$this->savePushTable($msg);
    	}	
    }
    
    function savePushTable($msg) {
    	$sql = "select * from push_token where  token != ''";
    	$tokens = $this->Pushnotification_model->fetchResult($sql, false);
    	
    	$pm = array();
    	for ($i =0;$i < count($tokens); $i++) {
    		$pm[] =array('token'=>$tokens[$i]->{'token'}, 'types'=>$tokens[$i]->{'platform'},'created_date'=>date('Y-m-d H:i:s'), 'pn_msg'=>$msg);
    	}
    	
    	$this->db->insert_batch('push_to_send', $pm);
    }

	function cron() {
		$sql = "select * from push_to_send where sent_date is null and types = 1 limit 10";
		$ios = $this->Pushnotification_model->fetchResult($sql, false);
		$now = date('Y-m-d H:i:s');
		
		if (count($ios) > 0) {
			foreach ($ios as $token) {
				$msg = $token->{'pn_msg'};
				$this->ios(array('msg'=>$msg), array($token->{'token'}));
				$sql = "update push_to_send set sent_date = '$now' where token = '".$token->{'token'}."' and 
				id =".$token->{'id'};
				$this->db->query($sql);
			}
		}
		
		$sql = "select * from push_to_send where sent_date is null and types = 2 limit 10";
		$ios = $this->Pushnotification_model->fetchResult($sql, false);
		
		if (count($ios) > 0) {
			foreach ($ios as $token) {
				$msg = $token->{'pn_msg'};
				$this->android(array('title'=>'','msg'=>$msg), array($token->{'token'}));
				$sql = "update push_to_send set sent_date = '$now' where token = '".$token->{'token'}."' and 
				id =".$token->{'id'};
				$this->db->query($sql);
			}
		}
	}
    
     // Sends Push notification for Android users
	public function android($data, $reg_ids) {
			$api_access_key = 'AIzaSyBmyT_4msPBCTEXZMmXdh7Ue3fWs_G-dPU';
		
		
	        $url = 'https://android.googleapis.com/gcm/send';
	        $message = array(
	            'title' => $data['title'],
	            'message' => $data['msg'],
	            'subtitle' => '',
	            'tickerText' => '',
	            'msgcnt' => 1,
	            'vibrate' => 1
	        );
	        
	        $headers = array(
	        	'Authorization: key=' .$api_access_key,
	        	'Content-Type: application/json'
	        );
	
	        $fields = array(
	            'registration_ids' => $reg_ids,
	            'data' => $message,
	        );
	
	    	return $this->useCurl($url, $headers, json_encode($fields));
    	}
	
	function test() {
		$this->iOS(array('msg'=>'《Tian Xiang Hainanese Chiken Rice》has joined LIVE, please download MyLive ads and visit 《Tian Xiang Hainanese Chiken Rice》! 《天香海南芽菜鸡饭》已经加入LIVE，请下载MyLive ads欢迎光临《天香海南芽菜鸡饭》！'), 
		array('6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d'));
// 		$this->android(array('title'=>'mylive','msg'=>'华语'), array('APA91bGc-3sizjgPZ-XEWcNHdQ0l_pdKsqVYwgVaz0ijoXpiEHqeXhXH7piTudHqud7rHe2DXY4u-6oMRoX-VlITMp-6P1FJfuOdmcE6jupQUYcDKWa3ov0'));
	}
	
        // Sends Push notification for iOS users
	public function iOS($data, $devicetokens) {
	
		$passphrase = '';
		$pem_cert = 'bplifecert.pem';
		$gateway = 'ssl://gateway.push.apple.com:2195'; //remove sandbox for production
		
		$ctx = stream_context_create();
		// ck.pem is your certificate file
		stream_context_set_option($ctx, 'ssl', 'local_cert',$pem_cert);
		stream_context_set_option($ctx, 'ssl', 'passphrase',$passphrase);
		// Open a connection to the APNS server

		
		
		
		for ($i= 0;$i <count($devicetokens); $i++) {
		
			log_message('error', $devicetokens[$i]);
			
			$fp = stream_socket_client(
			$gateway, $err,
			$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
			if (!$fp)
				exit("Failed to connect: $err $errstr" . PHP_EOL);
			// Create the payload body
			$body['aps'] = array(
				'alert' => $data['msg'],
				'sound' => 'default',
				'content-available'=>1
			);
			// Encode the payload as JSON
			$payload = json_encode($body);
		
			// Build the binary notification
			$msg = chr(0) . pack('n', 32) . pack('H*', $devicetokens[$i]) . pack('n', strlen($payload)) . $payload;
			// Send it to the server
	
			fwrite($fp, $msg, strlen($msg));
			// Close the connection to the server
			fclose($fp);
	
		}
		
	}
	
	// Curl 
	private function useCurl($url, $headers, $fields = null) {
	        // Open connection
	        $ch = curl_init();
	        if ($url) {
	            // Set the url, number of POST vars, POST data
	            curl_setopt($ch, CURLOPT_URL, $url);
	            curl_setopt($ch, CURLOPT_POST, true);
	            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	     
	            // Disabling SSL Certificate support temporarly
	            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	            if ($fields) {
	                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	            }
	     
	            // Execute post
	            $result = curl_exec($ch);
	            if ($result === FALSE) {
	            	log_message('error',  curl_error($ch));
	                die('Curl failed: ' . curl_error($ch));
	            }
	     
	            // Close connection
	            curl_close($ch);
// 	print_r($result);
	log_message('error', $result);
	            return $result;
        }
    }
    
	
}