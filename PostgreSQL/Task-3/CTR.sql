SELECT app_id,ROUND((100.0* SUM(case when event_type='click' then 1 else 0 end)/
SUM(case when event_type='impression' then 1 else 0 end)),2) AS crt FROM events WHERE 
timestamp >='1/1/2022' AND timestamp <'1/1/2023'  GROUP BY app_id;