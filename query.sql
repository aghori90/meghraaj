create table users (
    id int auto_increment Primary Key,
    username varchar(50) Not Null unique,
    password varchar(255) NOT NULL,
    email varchar(100) NOT NULL unique,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

insert into users (username, password, email, created_at) values ('aghori','aghori@123','aghori@gmail.com', now());