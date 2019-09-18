SELECT COUNT(`date`) AS 'movies'
FROM member_history
WHERE (DATE(`date`) LIKE '%-12-24%')
OR (DATE(`date`) LIKE '2006-12-24' OR DATE(`date`) LIKE '2007-12-24');
