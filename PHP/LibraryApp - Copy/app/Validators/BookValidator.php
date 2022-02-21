<?php

namespace App\Validators;

use App\Models\Book;
use App\Repositories\BookRepository;
use Exception;

class BookValidator
{
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    /**
     * @param Book $book
     * @param int|null $id
     * @return void
     * @throws Exception
     */
    public function validate(Book $book, ?int $id = null): void
    {
        if ($id) {
            $this->validateId($id);
            $this->validateUpdateParameters($book);
        } else {
            $this->validateParameters($book);
        }
    }

    /**
     * @param int $id
     * @return void
     * @throws Exception
     */
    protected function validateId(int $id): void
    {
        if (!$this->bookRepository->getBookById($id)) {
            throw new Exception("Book with id {$id} does not exist in database.");
        }
    }

    /**
     * @param Book $book
     * @return void
     * @throws Exception
     */
    protected function validateUpdateParameters(Book $book): void
    {
        if (!$book->getAuthor() && !$book->getName() && !$book->getYear()) {
            throw new Exception('At least one field: author, name or year is required.');
        }
    }

    /**
     * @param Book $book
     * @return void
     * @throws Exception
     */
    protected function validateParameters(Book $book): void
    {
        if (!$book->getAuthor()) {
            throw new Exception('Book author is required.');
        }

        if (!$book->getName()) {
            throw new Exception('Book name is required.');
        }

        if (!$book->getYear()) {
            throw new Exception('Book year is required.');
        }
    }
}