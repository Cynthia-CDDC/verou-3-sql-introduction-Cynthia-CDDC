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

UPDATE groups
SET status = 'some creative text that I cannot come up with right now !'
WHERE id = 1;