# Researches
## Task 1

## Topics
 - [*RDBMS*](#rdbms)
 - [*RDBMS vs. DBMS*](#rdbms-vs-dbms)
 - [*What is the PostgreSQL*](#what-is-the-postgresql)
 - [*What is PostgreSQL Clients ?*](#what-is-postgresql-clients-)
 - [*What purpose does pgAdmin server in PostgreSQL?*](#what-purpose-does-pgadmin-server-in-postgresql)
 - [*Naming conventions*](#naming-conventions)
 - [Refrences](#refrences)
---
### *RDBMS*
 
- RDBMS is abbreviation for Relational Database Management Systems when two or more tables have relationship between them which are used to make database access easier and efficient especially in large amounts of data commonly found in enterprise environments . 
- It allows users to create, read, update, and delete data using SQL.
- The most popular Relational Database Management Systems include MySQL, Oracle, SQL Server, and PostgreSQL.
   - PostgreSQL is an open-source RDBMS that is known for its robustness, extensibility, and support for advanced data types. It is also highly scalable and supports a wide range of platforms. 
--- 
### *RDBMS vs. DBMS*
**RDBMS** can handle complex and large amounts of data and multiply users , however **DBMS** is the general purpose database mangments system that can be used to store and manage various types of data. So we need to use RDBMS more because of amounts of data that we have to handel.

---
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

---
### *What is PostgreSQL Clients ?*

PostgreSQL client is defined as connect to the database server using the command, utility, or third party tool. Basically, we are using the psql utility to connect the database server from the OS interface, also, we are using the pg_admin tool to interact with the database server using the client interface. We can connect the database server using the username, password, and hostname of the database server, we can also connect the database server using client applications like pg_admin. We can connect to the database server from client by using a local host or from the remote host using psql utility or third party tool.

---
### *What purpose does pgAdmin server in PostgreSQL?*
- pgAdmin was created to help PostgreSQL users get the most out of their database. The purpose is to provide a graphical administration tool to make it easier to manipulate schema and data in PostgreSQL (or even multiple installations thereof)
- pgAdmin is the leading open source management tool for PostgreSQL, the world's most advanced open source database.

---  
### *Naming conventions*
 A naming convention is a convention (generally agreed scheme) for naming things. Conventions differ in their intents, which may include to:

- Allow useful information to be deduced from the names based on regularities. 
- Show relationships, and in most personal naming conventions
- Ensure that each name is unique for same scope 
- For instance :Developers of database schemas, program-name terminology and ontologies may apply a common set of labeling conventions for naming representational entities in their representational artefacts, i.e. conventions outlined or endorsed by terminology-regulatory bodies or by policy providers such as ISO or the OBO Foundry.
  
---
##### Refrences
1. [What is RDBMS?](https://www.dremio.com/wiki/rdbms/)
1. [RDBMS vs. DBMS](https://www.dremio.com/wiki/rdbms/)
1. [What is the PostgreSQL?](https://www.postgresql.org/files/documentation/pdf/16/postgresql-16-A4.pdf)
1. [What is PostgreSQL Clients ?](https://www.educba.com/postgresql-client/)
1. [What purpose does pgAdmin server in PostgreSQL ?](https://www.adservio.fr/post/what-is-pgadmin)
1. [Naming conventions](https://en.wikipedia.org/wiki/Naming_convention)
---

# Task 2

### Topics
- [Research](#research)
    - [Topics](#topics)
    - [Constraints In Postgresql](#constraints-in-postgresql)
    - [Indexing In Postgresql](#indexing-in-postgresql)
    - [How does indexing in mysql differ from postgresql?](#how-does-indexing-in-mysql-differ-from-postgresql)
      - [Refrence](#refrence)

### Constraints In Postgresql
Use PostgreSQL **CHECK** constraint to check the values of columns based on a boolean expression.Check constraints are a great way to add some simple logic to your data by having the database check something before an insert.

*Types of constrains in PostgreSQl:*
- not-Null Constraints.
- Unique Constraints.
- Primary Key.
- Foreign Key.
- Check Constraints.
- Exclusion Constraints
  
Constraints are a way to tell Postgres which kinds of data can be inserted into tables, columns, or rows.

*Final Thoughts for Creating Constraints*
1. Take some time to think through Postgres’ full range of constraints when you’re setting up your schema.
1. You’ll almost always want the foreign key constraints that ties together your primary keys
1. Make sure you add your cascades in at the beginning when you’re creating the foreign keys.
1. If you run across bad data later, you can add constraints after the fact.



### Indexing In Postgresql
It is a data structure type that allows you search faster and more efficiently .we build and assign it at the top of table then looks through your table and creats some kins of shortcut after analyze and summarizes the table.

The kinds of indexing in Postgresql are:
1. **B-Tree** can handle equality and range queries on data that can be sorted into some ordering
2. **Hash** store a 32-bit hash code derived from the value of the indexed column. Hence, such indexes can only handle simple equality comparisons.
3. **GIST** are not a single kind of index, but rather an infrastructure within which many different indexing strategies can be implemented. Accordingly, the particular operators with which a GiST index can be used vary depending on the indexing strategy (the operator class).
4. **SP-SIST**  like GiST indexes, offer an infrastructure that supports various kinds of searches. SP-GiST permits implementation of a wide range of different non-balanced disk-based data structures, such as quadtrees, k-d trees, and radix trees (tries).
5. **GIN** are “inverted indexes” which are appropriate for data values that contain multiple component values, such as arrays. An inverted index contains a separate entry for each component value, and can efficiently handle queries that test for the presence of specific component values.
6. **BRIN** (a shorthand for Block Range INdexes) store summaries about the values stored in consecutive physical block ranges of a table. Thus, they are most effective for columns whose values are well-correlated with the physical order of the table rows. Like GiST, SP-GiST and GIN, BRIN can support many different indexing strategies,
   


### How does indexing in mysql differ from postgresql?

- MySQL primarily employs B-tree indexes and supports full-text indexes for text search. 
- InnoDB, MySQL's default engine, uses clustered indexes, aligning with the primary key order.
- In contrast, PostgreSQL offers a wider range of indexing methods, including B-tree, Hash, GiST, SP-GiST, GIN, and BRIN, catering to diverse data types and query patterns. 
- PostgreSQL's flexibility extends to expression indexes, enhancing query optimization for complex expressions.
 
 ----
#### Refrence
1. [Constraints in Postgresql](https://www.crunchydata.com/blog/postgres-constraints-for-newbies#final-thoughts-for-creating-constraints)
1. [Indexing in Postgresql]( https://www.postgresql.org/docs/current/indexes-types.html)
1. [How does indexing in mysql differ from postgresql?](https://chat.openai.com/)
---
# Task 3
 ## Topics
 - [primary keys vs unique keys](#primary-keys-vs-unique-keys)

### Primary keys vs unique keys
|**Primary keys**|**Unique keys**|
|:---:|:---:|
|Identify a unique **Record** |Identify a unique **Column**  no duplicate values| 
|May have only one per table|As many columns as you have |
|**Can't** store NULL valuse |**Can** store NULL valuse but only one value is alloswe|
|Can't be removed ,difficult to change |Easy to change or remove |
|Clustered index |Not clustered index|
  ---
  ### Refrence
  - [primary keys vs unique keys](https://www.gleek.io/blog/primary-vs-unique)