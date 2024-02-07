# Research 
---
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
