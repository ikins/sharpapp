<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
/**
 * @package  : API
 */
class Api extends CI_Controller {

    public function __construct() {

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        
        parent::__construct();

        $this->load->library('user_agent');

        //Session
        $this->load->library('session');

        //load model web
        $this->load->model('games_model');
        
        //
        $this->config->set_item('csrf_protection', TRUE);
        //

        //variable session
        $this->player = $this->session->userdata('is_game');
        

        //load model web
        $this->load->model('games_model');
        //
        $this->config->set_item('csrf_protection', TRUE);
    
    }


    public function reqToken() {
        header('Access-Control-Allow-Origin: *');
        $ip = $this->input->ip_address();
        //getbyip
        $results = $this->games_model->g_player($ip);
        if(empty($results)){
            $response['status'] = 'failed';
            $response['message'] = 'user true';
            $response['game_id'] = 3;
            $response['token_id'] = 'SG000001';
            echo json_encode($response,TRUE);
        }else{
            foreach ($results as $row) {
                //update status play
                $gameID = $row->game_id;
                $data = array(
                    'game_status'     => 1,
                );
                $this->games_model->game_update_status($gameID, $data);
                //
                $response['status'] = 'success';
                $response['message'] = 'user true';
                $response['game_id'] = $row->game_id;
                $response['token_id'] = $row->game_token;
                echo json_encode($response,TRUE);
            }
            
        }
      
    }

    public function endGame()
    {   
        header('Access-Control-Allow-Origin: *');
        //
        $data = (array)json_decode(file_get_contents('php://input'));
        $tokenID = $data['tokenID'];
        $gameID = $data['gameID'];
        $score = $data['score'];

        //check score
         if($score < 75){
            //update reward
            $data = array(

                    'game_token'     => $tokenID,
                    'game_id'        => $gameID,
                    'game_score'     => $score,
                    'game_status'    => '0',
                    'game_reward'    => '0'

                );

            $result = $this->games_model->game_update_score($gameID, $data);
            //
            $response['status'] = 'failed';
            $response['message'] = 'score failed';
            echo json_encode($response,TRUE);
         }else{

            if($gameID != 3){
                //get voucher game
                $vf = $this->games_model->game_voucher();
                $game_voucher = $vf['voucher'];

                $data = array(

                    'game_token'     => $tokenID,
                    'game_id'        => $gameID,
                    'game_score'     => $score,
                    'game_voucher'   => $game_voucher,
                    'game_status'    => '0',
                    'game_reward'    => '1'

                );

                $result = $this->games_model->game_update_score($gameID, $data);

                    $response['status'] = 'success';
                    $response['message'] = 'score entry';
                    $response['token_id'] = $tokenID;
                    $response['game_id'] = $gameID;
                    $response['score'] = $score;
                    echo json_encode($response,TRUE);
            }else{
                    //update reward
                    $data = array(

                            'game_token'     => $tokenID,
                            'game_id'        => $gameID,
                            'game_score'     => $score,
                            'game_status'    => '0',
                            'game_reward'    => '0'

                            );

                    $result = $this->games_model->game_update_score($gameID, $data);
                    //
                    $response['status'] = 'failed';
                    $response['message'] = 'token false';
                    $response['token_id'] = $tokenID;
                    $response['game_id'] = $gameID;
                    $response['score'] = $score;
                    echo json_encode($response,TRUE);
            }

            

        }

    }

}