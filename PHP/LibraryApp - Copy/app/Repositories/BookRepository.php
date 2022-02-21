<?php

namespace App\Repositories;

use App\Models\Book;
use JMS\Serializer\SerializerBuilder;
use PDO;

class BookRepository
{
    /**
     * @var PDO
     */
    private PDO $dbh;

    public function __construct()
    {
        $host = getenv('MYSQL_HOST');
        $database = getenv('MYSQL_DATABASE');
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');

        $this->dbh = new PDO("mysql:host={$host};dbname={$database}", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    /**
     * @return array
     */
    public function getAllBooks(): array
    {
        $query = 'SELECT * FROM books';

        $stmt = $this->dbh->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getBookById(int $id)
    {
        $query = "SELECT * FROM books WHERE id = :id";

        $stmt = $this->dbh->prepare($query);
        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param Book $book
     * @return string
     */
    public function insert(Book $book): string
    {
        $author = $book->getAuthor();
        $name = $book->getName();
        $year = $book->getYear();

        $datetime = date('Y-m-d H:i:s');

        $query = "INSERT INTO books (author, name, year, created_at) VALUES (:author, :name, :year, :datetime)";

        $stmt = $this->dbh->prepare($query);
        $stmt->execute([
            'author'    => $author,
            'name'      => $name,
            'year'      => $year,
            'datetime'  => $datetime
        ]);

        return $this->dbh->lastInsertId();
    }

    /**
     * @param Book $book
     * @param int $id
     * @return bool
     */
    public function update(Book $book, int $id): bool
    {
        $author = $book->getAuthor();
        $name = $book->getName();
        $year = $book->getYear();

        $datetime = date('Y-m-d H:i:s');

        $query = "UPDATE books SET author = :author, name = :name, year = :year, updated_at = :datetime WHERE id = :id";

        $stmt = $this->dbh->prepare($query);

        return $stmt->execute([
            'author'    => $author,
            'name'      => $name,
            'year'      => $year,
            'datetime'  => $datetime,
            'id'        => $id
        ]);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $query = "DELETE FROM books WHERE id = :id";

        $stmt = $this->dbh->prepare($query);

        return $stmt->execute([
            'id' => $id
        ]);
    }

    /**
     * @param string $data
     * @return mixed
     */
    public static function deserializeBook(string $data)
    {
        $serializer = SerializerBuilder::create()->build();

        return $serializer->deserialize($data, Book::class, 'json');
    }
}