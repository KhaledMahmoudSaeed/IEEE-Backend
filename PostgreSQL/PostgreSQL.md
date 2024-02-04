# Research Task 1

## Topics
 - [*RDBMS*](#rdbms)
 - [*RDBMS vs. DBMS*](#rdbms-vs-dbms)
 - [*What is the PostgreSQL*](#what-is-the-postgresql)
 - [*What is PostgreSQL Clients ?*](#what-is-postgresql-clients-)
 - [*What purpose does pgAdmin server in PostgreSQL?*](#what-purpose-does-pgadmin-server-in-postgresql)
 - [*Naming conventions*](#naming-conventions)
 - [Refrences](#refrences)

### *RDBMS*
 
- RDBMS is abbreviation for Relational Database Management Systems when two or more tables have relationship between them which are used to make database access easier and efficient especially in large amounts of data commonly found in enterprise environments . 
- It allows users to create, read, update, and delete data using SQL.
- The most popular Relational Database Management Systems include MySQL, Oracle, SQL Server, and PostgreSQL.
   - PostgreSQL is an open-source RDBMS that is known for its robustness, extensibility, and support for advanced data types. It is also highly scalable and supports a wide range of platforms. 
  
### *RDBMS vs. DBMS*
**RDBMS** can handle complex and large amounts of data and multiply users , however **DBMS** is the general purpose database mangments system that can be used to store and manage various types of data. So we need to use RDBMS more because of amounts of data that we have to handel.

### *What is the PostgreSQL*
- PostgreSQL is an object-relational database management system (ORDBMS) based on POSTGRES ( database engine),
Version 4.21
, developed at the University of California at Berkeley Computer Science Department.
POSTGRES pioneered many concepts that only became available in some commercial database systems much later.
PostgreSQL is an open-source descendant of this original Berkeley code. It supports a large part of
the SQL standard and offers many modern features:
1. complex queries
1. foreign keys
1. triggers
1. updatable views
1. transactional integrity
1. multiversion concurrency control

- And because of the liberal license, PostgreSQL can be used, modified, and distributed by anyone free
of charge for any purpose, be it private, commercial, or academic.

### *What is PostgreSQL Clients ?*

PostgreSQL client is defined as connect to the database server using the command, utility, or third party tool. Basically, we are using the psql utility to connect the database server from the OS interface, also, we are using the pg_admin tool to interact with the database server using the client interface. We can connect the database server using the username, password, and hostname of the database server, we can also connect the database server using client applications like pg_admin. We can connect to the database server from client by using a local host or from the remote host using psql utility or third party tool.

### *What purpose does pgAdmin server in PostgreSQL?*
- pgAdmin was created to help PostgreSQL users get the most out of their database. The purpose is to provide a graphical administration tool to make it easier to manipulate schema and data in PostgreSQL (or even multiple installations thereof)
- pgAdmin is the leading open source management tool for PostgreSQL, the world's most advanced open source database.
  
### *Naming conventions*
 A naming convention is a convention (generally agreed scheme) for naming things. Conventions differ in their intents, which may include to:

- Allow useful information to be deduced from the names based on regularities. 
- Show relationships, and in most personal naming conventions
- Ensure that each name is unique for same scope 
- For instance :Developers of database schemas, program-name terminology and ontologies may apply a common set of labeling conventions for naming representational entities in their representational artefacts, i.e. conventions outlined or endorsed by terminology-regulatory bodies or by policy providers such as ISO or the OBO Foundry.
  

##### Refrences
1. [What is RDBMS?](https://www.dremio.com/wiki/rdbms/)
1. [RDBMS vs. DBMS](https://www.dremio.com/wiki/rdbms/)
1. [What is the PostgreSQL?](https://www.postgresql.org/files/documentation/pdf/16/postgresql-16-A4.pdf)
1. [What is PostgreSQL Clients ?](https://www.educba.com/postgresql-client/)
1. [What purpose does pgAdmin server in PostgreSQL ?](https://www.adservio.fr/post/what-is-pgadmin)
1. [Naming conventions](https://en.wikipedia.org/wiki/Naming_convention)