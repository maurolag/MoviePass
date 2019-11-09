USE moviepassdb;
/* INSERT INTO genders (GenderName) VALUES ('Female');

insert into Genders (GenderName) values ('Male');

insert into Genders (GenderName)values ('Not binary');

select * from genders; */


-- INSERT INTO Users (UserName, Email, UserPassword, IdGender, BirthDate, Photo, IsAdmin, ChangedPassword)
--         VALUES ('Nacho', 'nachote98@gmail.com', '123', 1, null , '/MoviePass/Views/img/man.png', 0, 0);

SELECT * FROM Users
WHERE Email = 'nachote98@gmail.com' AND UserPassword = '123';

-- select * from users;