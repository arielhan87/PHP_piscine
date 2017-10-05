SELECT COUNT(db_jhan.film.title) AS `nb_short-films`
	FROM db_jhan.film
	INNER JOIN db_jhan.genre
	ON db_jhan.film.id_genre = db_jhan.genre.id_genre
	WHERE (db_jhan.genre.name = "short film")
		AND (db_jhan.film.duration <= 42);
