<?php

/**
 * bg_friendship�����ģ��
 */
class FriendshipModel extends Model {
	/**
	 * ��ȡ����������Ϣ
	 */
	public function getfrdInfo(){
		$sql = "select * from bg_friendship";
		return $this->dao->fetchAll($sql);
	}
}	 
