SELECT `title` AS `Title`,
		`summary` AS `Summary`,
		`prod_year`
 	FROM db_jhan.film
	INNER JOIN db_jhan.genre
		ON db_jhan.film.id_genre = db_jhan.genre.id_genre
	WHERE (db_jhan.genre.name = "erotic")
	ORDER BY `prod_year` DESC;