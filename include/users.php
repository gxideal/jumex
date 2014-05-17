<?php
error_reporting(0);
class Users{
  private  $_db;
  function __construct($dbobj){
	   $this ->_db = $dbobj;
     }
      //添加新闻的函数 ；
    private function _cktypename($typename){
	   $sql="select*from branch_shop where add_1='{$typename}'";
 	   $result=$this->_db -> execute($sql);
 	   $rows=$this->_db ->fetch_assoc($result);
 	   $id=$rows['id'];
	   return $id;
    } 
   public function addjop($s){
	$id=$this->_cktypename($s['s_id']);
	$sql="insert into job_info set shop_id ='{$id}',content = '{$s['j_cont']}',title='{$s['j_tit']}',start_time='{$s['j_stime']}',end_time='{$s['j_etime']}',sort='{$s['j_px']}',display='{$s['j_dis']}'";
   $this -> _db->execute($sql);
   $lastId = $this -> _db -> insert_id();
	 return $lastId;
   }
   
   public function  selshop($sql){
      //$sql = "select * from branch_shop ";
      $result =$this -> _db->execute($sql);
	  return $result;
    }
	
	
   public function  seljop($sql){
      $result =$this -> _db->execute($sql);
	  return $result;
   }   
     
   public function  deljop($id){
      $sql = "delete from job_info where id='{$id}'";
      $result =$this -> _db->execute($sql);
	  $affectrows=$this->_db->affected_rows();
	  return $affectrows;
   }  
   public function  seljop2($id){
      $sql = "select*from job_info where id='{$id}'";
      $result =$this -> _db->execute($sql);
	  return $result;
   }
   
   public function  modjop($s){
	  $id=$this->_cktypename($s['s_id']);
      $sql = "update job_info set shop_id ='{$id}',content = '{$s['j_cont']}',title='{$s['j_tit']}',start_time='{$s['j_stime']}',end_time='{$s['j_etime']}',sort='{$s['j_px']}',display='{$s['j_dis']}' where id='{$s['id']}'";
      $result =$this -> _db->execute($sql);
	  $affectrows=$this->_db->affected_rows();
	  return $affectrows;
   }  
   
   
   public function  addeamil($s){
      $sql = "insert into send_email set title='{$s['title']}',content='{$s['info']}',create_time='{$s['create_time']}',send_time='{$s['send_time']}',sender_add='{$s['sender']}',receive_add='{$s['receive']}',send_name='{$s['sendname']}'";
      $result =$this -> _db->execute($sql);
	  $lastId = $this -> _db -> insert_id();
	  return $lastId;  
   }
   
   
   
   
   
   
   
}
?>