SELECT DISTINCT CITY FROM STATION WHERE (CITY REGEXP '^[^aeiou]') AND (CITY NOT REGEXP '[aeiou]$') ;