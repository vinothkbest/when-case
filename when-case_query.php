<?php

return Appointment::selectRaw("count(*) as total,
		IFNULL(SUM(CASE WHEN status ='0' THEN 1 ELSE 0 END),0) AS pending,
		IFNULL(SUM(CASE WHEN status ='1' THEN 1 ELSE 0 END),0) AS hold,
		IFNULL(SUM(CASE WHEN status ='2' THEN 1 ELSE 0 END),0) AS approved,
		IFNULL(SUM(CASE WHEN status ='3' THEN 1 ELSE 0 END),0) AS cancelled,
		IFNULL(SUM(CASE WHEN status ='4' THEN 1 ELSE 0 END),0) AS rejected")->where($condition)->first();
