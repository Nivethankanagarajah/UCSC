<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 11/27/2018
 * Time: 2:25 PM
 */

class Forum extends CI_Controller
{

public function view_forum() {

        $this->load->model('Modle_ques');
        $result['questions'] = $this->Modle_ques->get_question();
        //$result['replies'] = $this->Modle_ques->get_reply();
        $disArray=array();
        $count=0;
        foreach ($result['questions'] as $row){
            $isPresent=false;
            for($i=0;$i<count($disArray);$i++){
                if($disArray[$i]->question_id==$row->question_id){
                    $isPresent=true;
                    break;
                }
            }
            if(!$isPresent){
                $disArray[$count]=$row;
                $count++;
            }
        }

        $result['id']=$disArray;


        if($result!=false) {

            $this->load->view('forum1', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }
public function full_quest(){
    $id=$this->input->get('id');
    $this->load->model('Modle_ques');

    $result=$this->Modle_ques->full_quest($id);

    if($result!=false) {

        $data['question'] = array(

            'id' => $result->question_id,
            'title' => $result->quest_title,
            'question' => $result->question,
            'time' => $result->time,
            'student_name' => $result->student_name

        );

        $this->load->view('reply', $data);

    }


}

public function add_question(){
    $this->load->view('add_quest');
}

public function add_reply(){

    echo "ok";
    $this->load->model('Modle_ques');
    $this->Modle_ques->insert_reply();
    redirect(base_url('index.php/Forum/view_forum'));
}

public function add_new_quest(){

    $this->load->model('Modle_ques');
    $this->Modle_ques->insert_quest();
    redirect(base_url('index.php/Forum/view_forum'));
}



}