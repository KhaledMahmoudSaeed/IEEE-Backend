SELECT sender_id,count(content) AS message_count FROM messages
WHERE EXTRACT(MONTH FROM sent_date) ='8' AND EXTRACT(YEAR FROM sent_date) ='2022'
GROUP BY sender_id  ORDER BY count(content) DESC LIMIT(2);
