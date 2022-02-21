<?php

namespace App\SaveHandlers;

use App\Helper;
use App\Models\Book;
use App\Repositories\BookRepository;
use Exception;

class BookSaveHandler
{
    /**
     * @var BookRepository
     */
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    /**
     * @param Book $book
     * @return string
     * @throws Exception
     */
    public function save(Book $book): string
    {
        $lastInsertID = $this->bookRepository->insert($book);

        return Helper::buildResponseMessage('Book successfully created.', true, ['id' => $lastInsertID]);
    }

    /**
     * @param Book $book
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function update(Book $book, int $id): string
    {
        $oldBook = $this->bookRepository->getBookById($id);
        $book = $this->leaveOldValuesIfEmpty($oldBook, $book);

        if ($this->bookRepository->update($book, $id)) {
            return Helper::buildResponseMessage('Book successfully updated.', true, ['id' => $id]);
        }

        throw new Exception('Something wrong while updating book. Please try again.');
    }

    /**
     * @param array $oldBook
     * @param Book $book
     * @return Book
     */
    private function leaveOldValuesIfEmpty(array $oldBook, Book $book): Book
    {
        /* @var $newBook Book */
        $newBook = $this->bookRepository->deserializeBook(json_encode($oldBook));

        if ($book->getAuthor() !== null) {
            $newBook->setAuthor($book->getAuthor());
        }

        if ($book->getName() !== null) {
            $newBook->setName($book->getName());
        }

        if ($book->getYear() !== null) {
            $newBook->setYear($book->getYear());
        }

        return $newBook;
    }
}