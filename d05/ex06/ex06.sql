SELECT `title`, `summary` FROM db_jhan.film 
WHERE (LOWER(`summary`) REGEXP "vincent") 
ORDER BY id_film ASC;
