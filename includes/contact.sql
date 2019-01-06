CREATE table contact(
   	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
   	user_name varchar(256) not null,
   	user_email varchar(256) not null,
   	user_number varchar(256) not null,
   	user_message varchar(1056) not null

   	);

   INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ("Daniel", "Neilson", "jajaaj@gmail.com", "daddy", "yolo123")
