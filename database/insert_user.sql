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


SELECT
  email,
  username
FROM User
WHERE lower(email) = lower(?) OR lower(username) = lower(?);

DELETE FROM THwitterDB.User
WHERE user_id = 4;

SELECT *
FROM User;