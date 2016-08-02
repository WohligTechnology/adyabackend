<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class contact_model extends CI_Model
{
public function create($name,$phone,$email,$message)
{
$data=array("name" => $name,"phone" => $phone,"email" => $email,"message" => $message);
$query=$this->db->insert( "adyabackend_contact", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("adyabackend_contact")->row();
return $query;
}
function getsinglecontact($id){
$this->db->where("id",$id);
$query=$this->db->get("adyabackend_contact")->row();
return $query;
}
public function edit($id,$name,$phone,$email,$message)
{
if($image=="")
{
$image=$this->contact_model->getimagebyid($id);
$image=$image->image;
}
$data=array("name" => $name,"phone" => $phone,"email" => $email,"message" => $message);
$this->db->where( "id", $id );
$query=$this->db->update( "adyabackend_contact", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `adyabackend_contact` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `adyabackend_contact` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `adyabackend_contact` ORDER BY `id`
                    ASC")->row();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}

public function contactSubmit($name,$email,$phone,$message){


$msg = "
<html><body><div id=':1fn' class='a3s adM' style='overflow: hidden;'>
<p style='color:#000;font-family:Roboto;font-size:14px'>Name : $name <br/>
Phone : $phone <br/>
Email : $email <br/>
Message : $message
</p>

</div></body></html>";
if(!empty($email) && !empty($phone) && !empty($name) )
{
  $this->db->query("INSERT INTO `adyabackend_contact`(`name`,`phone`,`email`,`message`) VALUE('$name','$phone','$email','$message')");
  $id=$this->db->insert_id();
	$this->email_model->emailer($msg,'Contact Form Submission',$email,$username);
  $object = new stdClass();
  $object->value = true;
  return $object;
}

  else {

    $object = new stdClass();
    $object->value = false;
    return $object;
  }


}
}
?>
