CREATE TABLE instructor(
    instructor_id uuid PRIMARY KEY NOT NULL ,
    name VARCHAR(60) NOT NULL,
    address VARCHAR(150) NOT NULL,
    phone_number INT NOT NULL,
    email_address VARCHAR(150) ,
    expertise INT NOT NULL );/* We determine the experience of any coach depending on the number of months he or she has worked */