use THwitterDB;

create schema THwitterDB;
DROP TABLE Post;
create table Post(
    post_id   integer auto_increment,
    sender_id integer,
    message   VARCHAR(140),
    timestamp timestamp,
    primary key(post_id),
    foreign key(sender_id) 
    references User(user_id)
);

create table User(
	user_id integer auto_increment,
    username varchar(50) unique,
    email varchar(50) unique,
    password varchar(50),
    primary key (user_id)
);

create table Follow(
	follower_id integer,
    star_id integer,
    foreign key (follower_id)
    references User(user_id),
    foreign key (star_id)
    references User(user_id)
);

SELECT *
FROM Post;


