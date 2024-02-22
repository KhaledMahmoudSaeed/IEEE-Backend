SELECT w.id, p.age ,w.coins_needed, w.power FROM Wands AS w
JOIN Wands_Property AS p USING(code) 
WHERE p.is_evil = 0 AND
/* we here determine wand should be non evil and has min number of gold galleons needed and continue define the table and its relation*/
w.coins_needed=(SELECT MIN(w1.coins_needed) FROM Wands AS w1 JOIN 
/* This ensures that only rows with the same power and age are considered when finding the minimum coins_needed */
Wands_Property AS p1 USING(code) WHERE w1.power=w.power AND p1.age=p.age )
ORDER BY power DESC , age DESC;
