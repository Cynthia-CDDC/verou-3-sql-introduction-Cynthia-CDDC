# verou-3-sql-introduction-Cynthia-CDDC
SQL SOLUTIONS:

3 a:
SELECT * FROM `groups`

3 b:
SELECT name AS learner_name, email
FROM `learners`;

4 a:
UPDATE groups
SET start_date = '2022-05-10'
WHERE id = 1;

4 b:
first added the column in Structure and then updated in SQL.
UPDATE groups
SET status = 'some creative text that I cannot come up with right now !'
WHERE id = 1;

or 4 b:
ALTER TABLE groups
ADD `status-2` longtext;
SET status = 'still no inspiration !'
WHERE id = 1;

5:
DELETE FROM learners WHERE id= 1;

6: 
If I assume that several coaches and learners can belong to one group only:

give tables 'coaches' and 'learners' a new field 'group_id' in SQL
ALTER TABLE coaches
ADD `group_id` int;
ALTER TABLE learners
ADD `group_id` int;

then give each coach and each learner the id of the group they belong to

7 a:
SELECT groups.*, coaches.* 
FROM coaches 
LEFT JOIN groups 
ON groups.id = 1 AND coaches.group_id = 1 
WHERE coaches.id = 1;

7 b:
SELECT groups.*, coaches.*, learners.* 
FROM coaches 
LEFT JOIN (groups JOIN learners ON learners.active = 1 AND learners.group_id = 1) ON groups.id = 1 AND coaches.group_id = 1 
WHERE coaches.id = 1;

