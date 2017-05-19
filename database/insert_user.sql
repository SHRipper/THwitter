use THwitterDB;

insert into 
User (
username, email,password
)
 values(
'SHRipper','lukas.schaef@web.de','hallo1234'
);


insert into 
User (
username, email,password
)
 values(
'timbirdy','tim.vogel@web.de','1234hallo'
);

insert into
User (
username, email,password
)
 values(
'domi','kern.dominic@web.de','passwort'
);


SELECT
  email,
  username
FROM User
WHERE lower(email) = lower(?) OR lower(username) = lower(?);

DELETE FROM THwitterDB.User
WHERE username = ?;

UPDATE User
SET username = lower(username)
WHERE user_id = 3;

SELECT *
FROM User;

