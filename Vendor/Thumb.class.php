<?php
/*
*�ж��Ƿ��ϴ���ͼƬ(����ͼ)
*/
class Thumb {
	public function Thumbcheck($controller,$action) {
		// �ж��Ƿ�������ͼ�ϴ�
		if($_FILES['thumb']['error'] != 4) {
			// ˵���û�ѡ�����ϴ��ļ�,ʵ�����ϴ���
			$upload = Factory::M('Upload');
			// ��ʼ����ز���
			$allow = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg');
			$path = UPLOADS_DIR . 'user';
			// ����uploadAction����
			$result = $upload->uploadAction($_FILES['thumb'], $allow, $path); //����������������
			// �ж��Ƿ��ϴ��ɹ�
			if($result) {
				// ��������ͼ
				$image = Factory::M('Image');
				$max_w = 175;
				$max_h = 115;
				$src_file = UPLOADS_DIR . 'user/' . $result;
				if($thumb = $image->makeThumb($max_w, $max_h, $src_file, $path)) {
					$user['user_image'] = $thumb;  //����ͼ
				}else {
					$this->jump("index.php?p=Back&c='$controller'&a='$action'", Image::$error);
				}
				$user['user_image']=$result; //ԭͼ
			}else {
				// ��¼������Ϣ����ת
				$error = Upload::$error;
				$this->jump("index.php?p=Back&c='$controller'&a='$action'", $error);
			}
		}else {
			$user['user_image'] = 'default.jpg';  //Ĭ������ͼ
		}
		return $user['user_image'];
	}
  }