<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller
{function getallcontact()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`adyabackend_contact`.`id`";
$elements[0]->sort="1";
$elements[0]->header="id";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`adyabackend_contact`.`name`";
$elements[1]->sort="1";
$elements[1]->header="name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`adyabackend_contact`.`phone`";
$elements[2]->sort="1";
$elements[2]->header="phone";
$elements[2]->alias="phone";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`adyabackend_contact`.`email`";
$elements[3]->sort="1";
$elements[3]->header="email";
$elements[3]->alias="email";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`adyabackend_contact`.`message`";
$elements[4]->sort="1";
$elements[4]->header="message";
$elements[4]->alias="message";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `adyabackend_contact`");
$this->load->view("json",$data);
}
public function getsinglecontact()
{
$id=$this->input->get_post("id");
$data["message"]=$this->contact_model->getsinglecontact($id);
$this->load->view("json",$data);
}
public function contactSubmit()
{
  $data = json_decode(file_get_contents('php://input'), true);
  $name = $data['name'];
  $email = $data['email'];
  $phone = $data['phone'];
  $message = $data['message'];

$data["message"]=$this->contact_model->contactSubmit($name,$email,$phone,$message);
$this->load->view("json",$data);
}

} ?>
