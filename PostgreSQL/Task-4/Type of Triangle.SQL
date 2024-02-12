SELECT 
CASE WHEN (A+B)>C AND (A+C)>B AND (B+C)>A THEN
  CASE 
     WHEN A=B AND A=C AND C=B THEN 'Equilateral'
     WHEN A=B OR A=C OR C=B THEN 'Isosceles'
     ELSE 'Scalene'
  END
ELSE 'Not A Triangle'
END 
FROM TRIANGLES ;