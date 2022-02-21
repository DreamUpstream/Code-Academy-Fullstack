<?php

namespace App\Controllers;

use App\Helper;
use App\Repositories\BookRepository;
use App\SaveHandlers\BookSaveHandler;
use App\Validators\BookValidator;
use Exception;

class BookController
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
     * @return string
     */
    public function getAllBooks(): string
    {
        $allBooks = $this->bookRepository->getAllBooks();

        return Helper::buildResponse($allBooks);
    }

    /**
     * @return string
     */
    public function createBook(): string
    {
        $data = file_get_contents('php://input');
        $book = $this->bookRepository->deserializeBook($data);

        $bookValidator = new BookValidator();
        $bookSaveHandler = new BookSaveHandler();

        try {
            $bookValidator->validate($book);
            $response = $bookSaveHandler->save($book);
        } catch (Exception $e) {
            $response = Helper::buildResponseMessage($e->getMessage(), false);
        }

        return $response;
    }

    /**
     * @param int $id
     * @return string
     */
    public function updateBookById(int $id): string
    {
        $data = file_get_contents('php://input');
        $book = $this->bookRepository->deserializeBook($data);

        $bookValidator = new BookValidator();
        $bookSaveHandler = new BookSaveHandler();

        try {
            $bookValidator->validate($book, $id);
            $response = $bookSaveHandler->update($book, $id);
        } catch (Exception $e) {
            $response = Helper::buildResponseMessage($e->getMessage(), false);
        }

        return $response;
    }

    /**
     * @param int $id
     * @return string
     */
    public function deleteBookById(int $id): string
    {
        if (!$this->bookRepository->getBookById($id)) {
            return Helper::buildResponseMessage("Book with id {$id} does not exist in database.", false);
        }

        if ($this->bookRepository->delete($id)) {
            return Helper::buildResponseMessage("Book with id {$id} successfully deleted.", true);
        } else {
            return Helper::buildResponseMessage('Something wrong while deleting book. Please try again.', false);
        }
    }
}