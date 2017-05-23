

SELECT
  p.post_id,
  p.sender_id,
  p.message
  FROM post p, follow f
WHERE (p.sender_id = f.star_id OR  p.sender_id = (SELECT u.user_id FROM user u WHERE u.username = "Domi"))
AND f.follower_id = (SELECT u.user_id FROM user u WHERE u.username = "Domi")

SELECT
  p.post_id,
  p.sender_id,
  p.message
  FROM Post p, Follow f
WHERE (p.sender_id = f.star_id OR  p.sender_id = (SELECT u.user_id FROM User u WHERE u.username = ?))
AND f.follower_id = (SELECT u.user_id FROM User u WHERE u.username = ?);

SELECT
  post.message AS message,
  author.username AS author,
  DATE_FORMAT(post.timestamp , '%d.%m.%Y %H:%i') AS time
        FROM Post post
        JOIN User author ON post.sender_id = author.user_id
        JOIN Follow f ON author.user_id = f.star_id
        JOIN User follower ON f.follower_id = follower.user_id
        WHERE author.username = ? OR follower.username = ? ORDER BY post.timestamp DESC;

SELECT
  user_id
From User user
WHERE username = "domi";

SELECT message AS message, username AS author, DATE_FORMAT(timestamp, '%d.%m.%Y %H:%i') AS time
FROM Post post
  JOIN User author ON post.sender_id = author.user_id
ORDER BY timestamp DESC