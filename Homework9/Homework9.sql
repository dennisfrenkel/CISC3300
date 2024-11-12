-- Part 6a: Create a new database
CREATE DATABASE homework_9;

-- Part 6b: Create the library table
CREATE TABLE homework_9.library (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    PRIMARY KEY (id)
);

-- Part 6c: Create the books table
CREATE TABLE homework_9.books (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    PRIMARY KEY (id)
);

-- Part 6d: Create the libraryBook table
CREATE TABLE homework_9.libraryBook (
    id INT(11) NOT NULL AUTO_INCREMENT,
    libraryID INT(11) NOT NULL,
    bookID INT(11) NOT NULL,
    PRIMARY KEY (id)
);

-- Part 7a: Insert sample data into the books and library table
INSERT INTO homework_9.library (name) VALUES ('Queens Library');
INSERT INTO homework_9.library (name) VALUES ('Fordham Library');

INSERT INTO homework_9.books (name) VALUES ('The Odyssey');
INSERT INTO homework_9.books (name) VALUES ('War and Peace');
INSERT INTO homework_9.books (name) VALUES ('The DaVinci Codes');

-- Part 7b: Insert rows into the libraryBook table
INSERT INTO homework_9.libraryBook (libraryID, bookID) VALUES (1, 1);
INSERT INTO homework_9.libraryBook (libraryID, bookID) VALUES (1, 2);
INSERT INTO homework_9.libraryBook (libraryID, bookID) VALUES (2, 3);
INSERT INTO homework_9.libraryBook (libraryID, bookID) VALUES (2, 4);


-- Part 7c: Select a library by id = 1
SELECT * FROM homework_9.library WHERE id = 1;

-- Part 7d: d. Select a book using the LIKE keyword with % wildcards
SELECT * FROM homework_9.books WHERE name LIKE '%War%';

-- Part 7e: Select all books ordered alphabetically by name
SELECT * FROM homework_9.library;
SELECT * FROM homework_9.books ORDER BY name ASC;

-- Part 8: Select names of books that belong to libraries (JOIN query)
SELECT books.name AS book_name, library.name AS library_name
FROM homework_9.books
JOIN homework_9.libraryBook ON books.id = libraryBook.bookID
JOIN homework_9.library ON libraryBook.libraryID = library.id;

-- Part 9: Update the name of a book
UPDATE homework_9.books
SET name = 'War and Peace (Updated Edition)'
WHERE id = 1;

-- Part 10: Delete a book from the 'books' table
DELETE FROM homework_9.books
WHERE id = 2;

