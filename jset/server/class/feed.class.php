<?php
class feed
{
	public static function get_data($db, $section)
	{
		if($tid)
			return $tid;
		
		$db->query("select if(max(tid) is null, 1 , max(tid) + 1) as result from jset_list where `type` = 'area'");
		return $db->fetch()->result;
	}

}
?>