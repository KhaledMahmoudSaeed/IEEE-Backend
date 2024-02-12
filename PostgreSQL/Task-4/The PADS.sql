SELECT CONCAT(NAME,'(',LEFT(Occupation,1),')')from OCCUPATIONS  ORDER BY Name ;
SELECT CONCAT("There are a total of ",COUNT(Occupation),' ',LOWER(Occupation),'s.') FROM 
OCCUPATIONS GROUP BY Occupation ORDER BY COUNT(Occupation),Occupation;

/* CONCAT() used to add one or more strings togather .... LEFT()  is simlar to SUBSTR() but more specific we may say
RIGHT() AND LEFT has fixed beging however SUBSTR() isn't */