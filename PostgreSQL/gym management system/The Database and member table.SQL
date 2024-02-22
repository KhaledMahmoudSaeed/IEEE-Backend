CREATE DATABASE gym 

CREATE TABLE subscriptions(
subscriptions_id uuid PRIMARY KEY NOT NULL ,
class uuid NOT NULL REFERENCES class(class_id),
);
CREATE TABLE member(
    id uuid PRIMARY KEY NOT NULL ,
    name VARCHAR(60) NOT NULL,
    address VARCHAR(150) NOT NULL,
    phone_number INT NOT NULL,
    email_address VARCHAR(150),
    subscriptions uuid NOT NULL REFERENCES subscriptions(subscriptions_id)
     );
