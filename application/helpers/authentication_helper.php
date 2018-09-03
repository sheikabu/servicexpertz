<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');


        if (! function_exists('checkAuthentication')) {
		 
			function checkAuthentication($token){
				$result = array();
				if($token != ''){
					$ci = get_instance();
					$ci->load->model('api/common_model');
					$token = explode(" ",$token);

					$condition = array('token' => $token[1], 'active' => true);
					$res = $ci->common_model->getRecords('users', $condition, 1);
									
					if(count($res) > 0){
						$result['user_id'] = $res[0]->user_id;
						$result['name'] = $res[0]->name;
						$result['email'] = $res[0]->email;
						$result['role'] = $res[0]->role;	
					}
				}else{
					return http_response_code(401);
					
				}
				
				
				return $result;
			}
		}
		



?>