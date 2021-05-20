<?php
class Shopman{
	public function getRand()
	{
		$sql="select * from hoa_don";
		return $this->select($sql);	
	}
}
?>