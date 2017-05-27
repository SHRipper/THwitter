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
	3, 'Feministin, don\'t judge', localtime()
);

select * from Post;

DELETE FROM Post