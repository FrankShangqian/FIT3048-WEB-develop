

INSERT INTO `apartments` (`apartment_id`,`apartment_address`,`apartment_type`)
VALUES
  (1000,"161-8044 Imperdiet St.","1B1B"),
  (1001,"4253 Varius Rd.","2B1B"),
  (1002,"P.O. Box 711, 2067 Consectetuer Road","Studio"),
  (1003,"7655 Feugiat Rd.","1B1B"),
  (1004,"334-1986 Eu Avenue","2B1B");


INSERT INTO `inspections` (`inspection_id`,`inspection_datetime`,`inspection_description`,`user_id`,`apartment_id`)
VALUES
  (10000,"2023-07-18","sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis",1,1000),
  (10001,"2022-12-27","lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies",1,1001),
  (10002,"2023-01-22","pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus",1,1002),
  (10003,"2022-07-09","a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque",1,1003),
  (10004,"2023-09-09","egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus",1,1004);