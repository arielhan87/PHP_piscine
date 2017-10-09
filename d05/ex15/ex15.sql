SELECT REVERSE(SUBSTR(`phone_number`, 2)) AS `rebmunenohp`
FROM db_jhan.distrib
WHERE (`phone_number` REGEXP "^05");