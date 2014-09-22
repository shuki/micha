<?php
class micha
{
	public static function next_area_tid($db, $tid)
	{
		if($tid)
			return $tid;
		
		$db->query("select if(max(tid) is null, 1 , max(tid) + 1) as result from jset_list where `type` = 'area'");
		return $db->fetch()->result;
	}

	public static function next_event_type_tid($db, $tid)
	{
		if($tid)
			return $tid;
		
		$db->query("select if(max(tid) is null, 1 , max(tid) + 1) as result from jset_list where `type` = 'event_type'");
		return $db->fetch()->result;
	}

	public static function next_message_type_tid($db, $tid)
	{
		if($tid)
			return $tid;
		
		$db->query("select if(max(tid) is null, 1 , max(tid) + 1) as result from jset_list where `type` = 'message_type'");
		return $db->fetch()->result;
	}
}
?>