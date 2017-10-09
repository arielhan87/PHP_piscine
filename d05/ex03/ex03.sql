INSERT INTO db_jhan.ft_table (login, `group`, creation_date) 
	SELECT last_name, "other", birthdate 
	FROM db_jhan.user_card 
	WHERE (last_name LIKE ("%a%")) 
		AND (char_length(last_name) < 9) 
	ORDER BY last_name ASC 
	LIMIT 10;