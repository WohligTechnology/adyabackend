<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class careers_model extends CI_Model
{
public function create($title,$experience,$qualification,$openings,$area,$order)
{
$data=array("title" => $title,"experience" => $experience,"qualification" => $qualification,"openings" => $openings,"area" => $area,"order" => $order);
$query=$this->db->insert( "adya_careers", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("adya_careers")->row();
return $query;
}
function getsinglecareers($id){
$this->db->where("id",$id);
$query=$this->db->get("adya_careers")->row();
return $query;
}
public function edit($id,$title,$experience,$qualification,$openings,$area,$order)
{
// if($image=="")
// {
// $image=$this->careers_model->getimagebyid($id);
// $image=$image->image;
// }
$data=array("title" => $title,"experience" => $experience,"qualification" => $qualification,"openings" => $openings,"area" => $area,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "adya_careers", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `adya_careers` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
// $query=$this->db->query("SELECT `image` FROM `adya_careers` WHERE `id`='$id'")->row();
// return $query;
}
public function getCareers()
{
$query=$this->db->query("SELECT * FROM `adya_careers` ORDER BY `order`")->result();
if($query)
{
$obj = new stdClass();
$obj->value = true;
$obj->data = $query;
}
else {
  $obj = new stdClass();
  $obj->value = false;
  $obj->data = "No data found";
}
return $obj;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `adya_careers` ORDER BY `id`
                    ASC")->result();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
}
