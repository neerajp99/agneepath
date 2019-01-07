CREATE table contact(
   	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
   	user_name varchar(256) not null,
   	user_email varchar(256) not null,
   	user_number varchar(256) not null,
   	user_message varchar(1056) not null

   	);

   INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ("Daniel", "Neilson", "jajaaj@gmail.com", "daddy", "yolo123");



   CREATE table register(
   	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
   	user_first varchar(256) not null,
   	user_last varchar(256) not null,
   	user_email varchar(256) not null,
   	user_number varchar(256) not null,
   	user_school varchar(256) not null,
   	user_mfootball varchar(256) not null,
   	user_wfootball varchar(256) not null,
   	user_mbasketball varchar(256) not null,
   	user_wbasketball varchar(256) not null,
   	user_voleyball varchar(256) not null,
   	user_badminton varchar(256) not null,
   	user_squash varchar(256) not null,
   	user_tabletennis varchar(256) not null

   	)
 INSERT INTO users (user_first, user_last, user_email, user_number, user_pwd) VALUES ("Daniel", "Neilson", "jajaaj@gmail.com", "daddy", "yolo123");
