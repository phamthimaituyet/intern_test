create table Canhan (
    id int auto_increment NOT NULL primary key,
    email VARCHAR(255) NOT NULL
)

create table luong (
    id int auto_increment NOT NULL primary key,
    salary int NOT NULL
)

SELECT email FROM canhan group by email having count(email) > 1
SELECT email FROM canhan group by email having count(email) = 1

SELECT 
CASE
    WHEN Count(*) > 1 THEN (SELECT salary FROM luong group by salary order by salary DESC LIMIT 1 offset 1)
    ELSE null
END AS SecondHighestSalary
FROM luong


