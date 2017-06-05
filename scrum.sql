-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-06-05 17:20:23.98

-- tables
-- Table: allocation
CREATE TABLE allocation (
    allocation_id int(11) NOT NULL AUTO_INCREMENT,
    user_id int(11),
    project_id int(11) ,
    project_role_id int(11) ,
    CONSTRAINT allocation_pk PRIMARY KEY (allocation_id)
);

-- Table: project
CREATE TABLE project (
    project_id int(11) NOT NULL AUTO_INCREMENT,
    project_title varchar(255) NOT NULL,
    project_status char NOT NULL,
    project_description text NOT NULL,
    project_start_date date NOT NULL,
    project_end_date date NOT NULL,
    project_priority int NOT NULL,
    CONSTRAINT projects_pk PRIMARY KEY (project_id)
) ENGINE InnoDB CHARACTER SET utf8;

-- Table: project_comment
CREATE TABLE project_comment (
    project_comment_id int NOT NULL AUTO_INCREMENT,
    project_id int(11),
    user_id int(11),
    project_comment_date date NOT NULL,
    project_comment text NOT NULL,
    CONSTRAINT comments_pk PRIMARY KEY (project_comment_id)
) ENGINE InnoDB CHARACTER SET utf8;

-- Table: project_role
CREATE TABLE project_role (
    project_role_id int(11) NOT NULL AUTO_INCREMENT,
    project_role_name varchar(255) NOT NULL,
    CONSTRAINT project_role_pk PRIMARY KEY (project_role_id)
);

-- Table: sprint
CREATE TABLE sprint (
    sprint_id int(11) NOT NULL AUTO_INCREMENT,
    project_id int(11),
    sprint_title varchar(255) NOT NULL,
    sprint_status char NOT NULL,
    sprint_description text NOT NULL,
    sprint_start_date date NOT NULL,
    sprint_end_date date NOT NULL,
    sprint_priority int NOT NULL,
    CONSTRAINT sprint_pk PRIMARY KEY (sprint_id)
);

-- Table: sprint_comment
CREATE TABLE sprint_comment (
    sprint_comment_id int(11) NOT NULL AUTO_INCREMENT,
    user_id int(11),
    sprint_id int NOT NULL,
    sprint_comment_date date NOT NULL,
    sprint_comment text NOT NULL,
    CONSTRAINT sprint_comment_pk PRIMARY KEY (sprint_comment_id)
);

-- Table: task
CREATE TABLE task (
    task_id int(11) NOT NULL AUTO_INCREMENT,
    sprint_id int(11),
    task_title varchar(255) NOT NULL,
    task_status char NOT NULL,
    task_description text NOT NULL,
    task_start_date date NOT NULL,
    task_end_date date NOT NULL,
    task_priority int NOT NULL,
    CONSTRAINT task_pk PRIMARY KEY (task_id)
);

-- Table: task_comment
CREATE TABLE task_comment (
    task_comment_id int(11) NOT NULL AUTO_INCREMENT,
    user_id int(11) ,
    task_id int(11) ,
    task_comment_date date NOT NULL,
    task_comment text NOT NULL,
    CONSTRAINT task_comment_pk PRIMARY KEY (task_comment_id)
);

-- Table: users
CREATE TABLE users (
    user_id int(11) NOT NULL AUTO_INCREMENT,
    login varchar(15) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    CONSTRAINT users_pk PRIMARY KEY (user_id)
) ENGINE InnoDB CHARACTER SET utf8;

-- foreign keys
-- Reference: allocation_project_role (table: allocation)
ALTER TABLE allocation ADD CONSTRAINT allocation_project_role FOREIGN KEY allocation_project_role (project_role_id)
    REFERENCES project_role (project_role_id);

-- Reference: allocation_users (table: allocation)
ALTER TABLE allocation ADD CONSTRAINT allocation_users FOREIGN KEY allocation_users (user_id)
    REFERENCES users (user_id);

-- Reference: comments_fk0 (table: project_comment)
ALTER TABLE project_comment ADD CONSTRAINT comments_fk0 FOREIGN KEY comments_fk0 (project_id)
    REFERENCES project (project_id);

-- Reference: comments_fk1 (table: project_comment)
ALTER TABLE project_comment ADD CONSTRAINT comments_fk1 FOREIGN KEY comments_fk1 (user_id)
    REFERENCES users (user_id);

-- Reference: projects_allocation (table: allocation)
ALTER TABLE allocation ADD CONSTRAINT projects_allocation FOREIGN KEY projects_allocation (project_id)
    REFERENCES project (project_id);

-- Reference: sprint_comments_users (table: sprint_comment)
ALTER TABLE sprint_comment ADD CONSTRAINT sprint_comments_users FOREIGN KEY sprint_comments_users (user_id)
    REFERENCES users (user_id);

-- Reference: sprint_project (table: sprint)
ALTER TABLE sprint ADD CONSTRAINT sprint_project FOREIGN KEY sprint_project (project_id)
    REFERENCES project (project_id);

-- Reference: sprint_sprint_comment (table: sprint_comment)
ALTER TABLE sprint_comment ADD CONSTRAINT sprint_sprint_comment FOREIGN KEY sprint_sprint_comment (sprint_id)
    REFERENCES sprint (sprint_id);

-- Reference: task_comment_task (table: task_comment)
ALTER TABLE task_comment ADD CONSTRAINT task_comment_task FOREIGN KEY task_comment_task (task_id)
    REFERENCES task (task_id);

-- Reference: task_comment_users (table: task_comment)
ALTER TABLE task_comment ADD CONSTRAINT task_comment_users FOREIGN KEY task_comment_users (user_id)
    REFERENCES users (user_id);

-- Reference: task_sprint (table: task)
ALTER TABLE task ADD CONSTRAINT task_sprint FOREIGN KEY task_sprint (sprint_id)
    REFERENCES sprint (sprint_id);

-- End of file.

