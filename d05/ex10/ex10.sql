SELECT film.title AS 'Title', film.summary AS 'Summary', film.prod_year
FROM film
WHERE film.id_genre IN (
    SELECT genre.id_genre
    FROM genre
    WHERE genre.name = "erotic"
)
ORDER BY film.prod_year DESC;
