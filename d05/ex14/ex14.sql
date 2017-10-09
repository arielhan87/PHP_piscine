SELECT `floor_number` AS `floor`, SUM(`nb_seats`) AS `seats`
FROM db_jhan.cinema
GROUP BY `floor`
ORDER BY `seats` DESC;