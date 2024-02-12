SELECT IF(Grade<8,Name=NULL,Name) ,Grade ,Marks FROM Students AS s JOIN Grades  AS g 
WHERE s.Marks BETWEEN g.MIN_Mark AND g.MAX_Mark  ORDER BY Grade DESC , Name;
/* we use join on marks because always students marks
 are between min and max and it referece  to a specific Grade ,and didn't use id and grade because grades is fixed from 0 to 10
 however id is depends on thier community */
