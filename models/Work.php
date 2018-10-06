<?php
class Model_Work extends Model{
    protected $_table="list";
    public function listAll(){
        $this->getData($this->_table);
        return $this->fetchAll();
    }
    public function deleteWork($id){
        $this->delete($this->_table,$this->where("id='$id'"));
    }
    public function insertWork($data){
        $this->insert($this->_table,$data);
    }
    public function checkWorkname($WorkName,$id=""){
        if($id != ""){
            $this->where("work_name='$WorkName' and id != '$id'");
        }else{
            $this->where("work_name='$WorkName'");
        }
        $this->getData($this->_table);
        if($this->num_rows() == 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function getWorkById($id){
        $this->where("id='$id'");
        $this->getData($this->_table);
        return $this->fetch();
    }
    public function updateWork($data,$id){
        $this->where("id='$id'");
        $this->update($this->_table,$data);
    }
}