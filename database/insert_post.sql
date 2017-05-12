use thwitter;

insert into
Post(
	sender_id, message, timestamp
)values(
	1, 'hallo ihr penner', localtime()
);

select * from Post;