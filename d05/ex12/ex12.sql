SELECT user_card.last_name, user_card.first_name
FROM user_card
INNER JOIN `member` ON `member`.id_user_card=user_card.id_user
WHERE (user_card.last_name LIKE '%-%' AND user_card.first_name LIKE '%-%')
OR (user_card.last_name LIKE '%-%') OR (user_card.first_name LIKE '%-%')
ORDER BY user_card.last_name ASC, user_card.first_name ASC;
