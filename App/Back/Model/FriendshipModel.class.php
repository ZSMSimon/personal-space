<?php
/*
*bg_friendship��Ĳ���ģ��
*/
class FriendshipModel extends Model {
	/**
	*��ȡ����������Ϣ
	*/
	public function getFriendInfo() {
		$sql="select * from bg_friendship";
		return $this->dao->fetchAll($sql);
	}
	/*
	*����������
	*/
	public function insertfrd($frd) {
		// ͨ������õ��������
		extract($frd);
		// ���
		$sql = "insert into bg_friendship values (null, '$frd_name','$frd_url')";
		return $this->dao->my_query($sql);
	}
	 /**
	 * ����id�Ż�ȡ������Ϣ
	 */
	public function getfrdInfoById($frd_id) {
		$sql="select * from bg_friendship where frd_id=$frd_id ";
		return $this->dao->fetchRow($sql);
	}
    /**
	 * ����id���޸�������Ϣ
	 */
	public function UpdatefrdById($frd) {
		extract($frd);
		$sql="update bg_friendship set frd_name='$frd_name',frd_url='$frd_url' where frd_id=$frd_id";
		return $this->dao->my_query($sql);
	}
    /**
	 * ����id��ɾ������
	 */
	public function delArtById($frd_id) {
		$sql = "delete from bg_friendship where frd_id = $frd_id";
		return $this->dao->my_query($sql);
	}
	/**
	 * ����id����������ɾ������
	 */
	public function delAllArt($frd_ids) {
		$sql = "delete from bg_friendship where frd_id in($frd_ids)";
		return $this->dao->my_query($sql);
	}
	
	

}	 