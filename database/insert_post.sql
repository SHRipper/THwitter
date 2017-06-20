use THwitterDB;

insert into
Post(
	sender_id, message, timestamp
)values(
	1, 'Ich bin Vegetarier!', localtime()
);

insert into
Post(
	sender_id, message, timestamp
)values(
	2, 'Ich mache Crossfit!', localtime()
);

insert into
Post(
	sender_id, message, timestamp
)values(
	3, '<script type="text/javascript">alert("User: baum / Passwort: baumhaus")</script>', localtime()
);

select * from Post;

DELETE FROM Post
WHERE post_id = 26;