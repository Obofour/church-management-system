CREATE database Church_Management_System;
use Church_Management_System;

-- creating  Members_Information table-- 
CREATE TABLE Members_Information(
Unique_id int(5) primary key,
First_Name varchar(100),
Last_Name varchar(200),
Other_Name varchar(200),
Contact varchar(20),
Date_of_Birth date,
Family_Details varchar(1600),
Church_Participation varchar(100)
);


-- creating  Service/Event table table--
CREATE TABLE Event(
Event_id int primary key auto_increment,
Event_Date date,
Event_Time time,
Event_Location varchar(100),
Event_Speaker varchar(100) 
);

-- creating  Ministries  table-- 
create table Ministries(
Ministries_id int primary key auto_increment,
Leaders varchar(100),
Roles varchar(100),
Upcoming_Event varchar(100)
);


-- creating  Donaton and Offering  table--
create table Donation(
Donation_id int primary key auto_increment,
Date date,
Amount varchar(200),
Purpose varchar(200),
D_Info varchar(200)
); 

-- creating  Attendance Tracking  table--
create table Attendance_Tracking(
Attendance_id int primary key auto_increment,
church_service_attendance varchar(100),
event_participation varchar(100),
Ministry_involvement varchar(100),
Unique_id int(10),
Event_id int,
Ministries_id int,
constraint fk_Members
foreign key (Unique_id)
References Members_Information(Unique_id),
foreign key (Event_id)
References Event(Event_id),
foreign key (Ministries_id)
References Ministries(Ministries_id)
);



create table admins(
id int primary key auto_increment,
username varchar(200),
email varchar(200),
password varchar(200)
);



