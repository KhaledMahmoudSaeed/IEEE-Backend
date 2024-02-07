SELECT candidate_id FROM candidates WHERE skill in( 'Python', 'Tableau' ,'PostgreSQL')
GROUP BY candidate_id HAVING count(skill)=3;
/* we first specify the candidate_id that have required skills "one at least"
then grouped it and using HAVING fun to get the required id */
