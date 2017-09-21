SELECT `title`, `summary` FROM db_jhan.film 
WHERE (title REGEXP "42") OR (summary REGEXP "42") 
ORDER BY duration ASC;
