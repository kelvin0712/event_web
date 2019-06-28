<?php
class Search_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("event");
  if($query != '')
  {
   $this->db->like('title', $this->db->escape_like_str($query));
   $this->db->or_like('eventTime', $this->db->escape_like_str($query));
   $this->db->or_like('location', $this->db->escape_like_str($query));
  }
  return $this->db->get();
 }
}