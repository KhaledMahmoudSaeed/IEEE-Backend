CREATE TABLE class(
    id uuid PRIMARY KEY NOT NULL ,
    title VARCHAR(60) NOT NULL,
    description VARCHAR(150) NOT NULL,
    schedule VARCHAR(50) NOT NULL ,
    max_capacity INT NOT NULL
    class_instructor uuid NOT NULL REFERENCES instructor(instructor_id)
    class_equipment uuid NOT NULL REFERENCES equipment(equipment_id));