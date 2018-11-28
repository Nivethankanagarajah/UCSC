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

//        $sql = "CREATE view tbl_view as \n"
//            . "select answer.ans_id,question.question_id,question.question,question.student_name,question.time as q_time,question.quest_title,answer.answer,answer.time as a_time\n"
//            . "from answer\n"
//            . "inner JOIN question on answer.q_id=question.question_id";

        $sql = "select answer.ans_id,question.question_id,question.question,question.student_name,question.time as q_time,question.quest_title,answer.answer,answer.time as a_time\n"
            . "from answer\n"
            . "right JOIN question on answer.q_id=question.question_id";

        $query = $this->db->query($sql);
        //$query = $this->db->query("SELECT question.question_id,question.question,question.student_name,question.quest_title FROM ucsc.question ORDER BY question.question_id DESC ;");

//        if($query->num_rows()>0) {
//            foreach ($query->result() as $row) {
//                $data[] = $row;
//            }
           return $query->result();


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
        echo "done";

        $answer=$_POST['reply'];
        $time=date('Y-M-D H:i:s');
        $admin_id=$_POST['a_id'];
        $quest_id=$_POST['q_id'];


        $this->db->set('answer',$answer);
        $this->db->set('time',$time);
        $this->db->set('admin_id',$admin_id);
        $this->db->set('q_id',$quest_id);
        if(!$this->db->insert("answer"));




//        $data=array(
//            'answer'=> $this->input->post('reply'),
//            'time'=>date('Y-M-D H:i:s'),
//            'q_id'=>$this->input->post('q_id'),
//            'admin_id'=>$this->input->post('a_id')
//        );
//        return $this->db->insert('answer',$data);
}

public function insert_quest(){
    $title=$_POST['title'];
    $time=date('Y-M-D H:i:s');
    $student_id=$_POST['s_id'];
    $student_name=$_POST['s_name'];
    $question=$_POST['quest'];


    $this->db->set('question',$question);
    $this->db->set('student_id',$student_id);
    $this->db->set('student_name',$student_name);
    $this->db->set('time',$time);
    $this->db->set('quest_title',$title);


    if(!$this->db->insert("question"));

}

}