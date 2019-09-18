SELECT REVERSE(SUBSTRING(phone_number, 3, 8)) AS 'rebmunenohp'
FROM distrib
WHERE phone_number LIKE '05%';
