use THwitterDB;

insert into
Follow(
	follower_id, star_id
) values(
	1,2
);

insert into
Follow(
	follower_id, star_id
) values(
	2,3
);
insert into
Follow(
	follower_id, star_id
) values(
	3,1
);

SELECT *
From Follow;

DELETE FROM Follow;

DELETE FROM follow
WHERE follower_id = 3
AND star_id = 1;