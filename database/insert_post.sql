use THwitterDB;

insert into
Post(
	sender_id, message, timestamp
)values(
	1, 'hallo ihr  penner von user 1', localtime()
);

insert into
Post(
	sender_id, message, timestamp
)values(
	2, 'hallo ihr penner 2 von user 2', localtime()
);

insert into
Post(
	sender_id, message, timestamp
)values(
	3, 'hallo ihr penner 3 von user 3', localtime()
);

select * from Post;

DELETE FROM Post