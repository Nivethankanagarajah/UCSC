<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 11/27/2018
 * Time: 2:38 PM
 */

class Modle_ques extends CI_Model
{

    public function get_question() {

        $query = $this->db->query("SELECT question.question_id,question.question,question.student_name,question.quest_title FROM ucsc.question ORDER BY question.question_id DESC ;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }


    }

    public function get_reply(){

        $query = $this->db->query("SELECT answer.answer,answer.q_id,answer.time FROM ucsc.answer ORDER BY answer.q_id DESC ");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

    }

    public function full_quest($id){
        $query=$this->db->query("SELECT * FROM ucsc.question WHERE question_id=$id;");
        return $query->row(0);

    }

public function insert_reply(){

        $answer=$_POST['reply'];
        $time=date('Y-M-D H:i:s');
        $q_id=$_POST['q_id'];
        $admin_id=$_POST['a_id'];

        $this->load->databae();
        $this->db->set('answer',$answer);
        $this->db->set('time',$time);
        $this->db->set('q_id',$q_id);
        $this->db->set('admin_id',$admin_id);
        if(!$this->db->insert("answer"))




        $data=array(
            'answer'=> $this->input->post('reply'),
            'time'=>date('Y-M-D H:i:s'),
            'q_id'=>$this->input->post('q_id'),
            'admin_id'=>$this->input->post('a_id')
        );
        return $this->db->insert('answer',$data);
}

public function insert_quest(){

}

}