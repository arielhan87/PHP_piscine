SELECT UPPER(db_jhan.user_card.last_name) AS NAME, db_jhan.user_card.first_name, db_jhan.subscription.price
	FROM db_jhan.member
	INNER JOIN db_jhan.user_card
		ON db_jhan.member.id_member = db_jhan.user_card.id_user
	INNER JOIN db_jhan.subscription
		ON db_jhan.member.id_sub = db_jhan.subscription.id_sub 
	WHERE db_jhan.subscription.price > 42
	ORDER BY db_jhan.user_card.last_name ASC, db_jhan.user_card.first_name ASC;