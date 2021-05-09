<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API
 */
class Api extends CI_Controller {

    public function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('games_model');
        //
        $this->config->set_item('csrf_protection', TRUE);
    
    }


    public function reqToken() {

        $game_id = $this->input->get('game_id');
        $token_id = $this->input->get('token_id');
        //
        if(!empty($token_id)){

            $response['status'] = 'success';
            $response['message'] = 'token ID player true';
            $response['game_id'] = $game_id;
            $response['token_id'] = $token_id;
            header('Content-Type: application/json');
            echo json_encode($response,TRUE);

        }else{

            $response['status'] = 'failed';
            $response['message'] = 'token ID player empty';
            header('Content-Type: application/json');
            echo json_encode($response,TRUE);
        }
        
    }

    public function endGame()
    {
        $data = (array)json_decode(file_get_contents('php://input'));
        $tokenID = $data['tokenID'];
        $gameID = $data['gameID'];
        $score = $data['score'];

        //check score
         if($score < 100){
            $response['status'] = 'failed';
            $response['message'] = 'score failed < 100 poin';
            header('Content-Type: application/json');
            echo json_encode($response,TRUE);
         }else{

            $data = array(
 
                'game_token'     => $tokenID,
                'game_id'        => $gameID,
                'game_score'     => $score

            );

            $result = $this->games_model->game_update_score($gameID, $data);

                $response['status'] = 'success';
                $response['message'] = 'score entry';
                $response['token_id'] = $tokenID;
                $response['game_id'] = $gameID;
                $response['score'] = $score;
                header('Content-Type: application/json');
                echo json_encode($response,TRUE);

        }

    }

}