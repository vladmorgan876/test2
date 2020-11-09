<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiBooksController extends Controller
{
    /**
     * @OA\Get(
     *     path="/books",
     *     tags={"Library"},
     *     summary="Get list of books from data base",
     *     operationId="books",
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     * )
     */
    public function books()
    {
        $books=DB::table('books')->get();
        return response()->json($books);
    }

    /**
     * @OA\Get(
     *     path="/book/{book_id}",
     *     tags={"Library"},
     *     summary="Get book by id from data base",
     *     operationId="bookid",
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\Parameter (
     *     name="book_id",
     *     in="path",
     *     description="value id of the book",
     *     required=false,
     *     @OA\Schema (
     *     type="integer",
     *     )
     * ),
     * )
     */
    public function bookid($id)
    {
        $bookid = DB::table('books')->where('id', $id)->get();
        return response()->json($bookid);
    }

    /**
     * @OA\Post(
     *   path="/updatebook/{bookId}",
     *   tags={"Library"},
     *   summary="Updates a book in data base",
     *   description="",
     *   operationId="updateBookInDb",
     *   @OA\RequestBody(
     *       required=false,
     *       @OA\MediaType(
     *           mediaType="application/x-www-form-urlencoded",
     *           @OA\Schema(
     *               type="object",
     *               @OA\Property(
     *                   property="name",
     *                   description="Updated name of the book",
     *                   type="string"
     *               ),
     *               @OA\Property(
     *                   property="author",
     *                   description="Updated author of the book",
     *                   type="string"
     *               ),
     *     @OA\Property(
     *                   property="category",
     *                   description="Updated category of the book",
     *                   type="string"
     *               ),
     *     @OA\Property(
     *                   property="description",
     *                   description="Updated description of this book",
     *                   type="string"
     *               ),
     *           )
     *       )
     *   ),
     *   @OA\Parameter(
     *     name="bookId",
     *     in="path",
     *     description="ID of user that needs to be updated",
     *     required=true,
     *     @OA\Schema(
     *         type="integer",
     *         format="int64"
     *     )
     *   ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     * )
     */
    public function updateBook($id, Request $request)
    {
        $newEdition = DB::table('books')->find($id);
        $newEdition->name = $request->name;
        $newEdition->author = $request->author;
        $newEdition->description = $request->description;
        $newEdition->category = $request->category;
        DB::table('books')->where('id', $id)->update(['name' => $newEdition->name, 'author' => $newEdition->author,
            'description'=>$newEdition->description,'category'=>$newEdition->category]);
        $bookid = DB::table('books')->where('id', $id)->get();
        return response()->json($bookid);
    }

    /**
     * @OA\Post  (
     *   path="/addbook",
     *   tags={"Library"},
     *   summary="Add a new book in data base",
     *   description="Add a book in data base",
     *   operationId="AddBookInDb",
     *   @OA\RequestBody(
     *       required=false,
     *       @OA\MediaType(
     *           mediaType="application/x-www-form-urlencoded",
     *           @OA\Schema(
     *               type="object",
     *               @OA\Property(
     *                   property="name",
     *                   description="Add name of the book",
     *                   type="string"
     *               ),
     *               @OA\Property(
     *                   property="author",
     *                   description="Add author of the book",
     *                   type="string"
     *               ),
     *      @OA\Property(
     *                   property="category",
     *                   description="Add category of the book",
     *                   type="string"
     *               ),
     *      @OA\Property(
     *                   property="description",
     *                   description="Add description of this book",
     *                   type="string"
     *               ),
     *           )
     *       )
     *   ),
     *
     *
     *
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     * )
     */
    public function addbook(Request $request)
    {

        $this->name = $request->name;
        $this->author = $request->author;
        $this->category = $request->category;
        $this->description = $request->description;
        DB::table('books')->insert(['name'=>$this->name,'author'=>$this->author,'category'=>$this->category,
            'description'=>$this->description]);
        $books = DB::table('books')->get();
        return response()->json($books);
    }

    /**
     * @OA\Delete(
     *     path="/deletebook/{id}",
     *     summary="Delete a book from data base",
     *     description="Deletes a book by id",
     *     operationId="deleteBook",
     *     tags={"Library"},
     *     @OA\Parameter(
     *         description="Book id to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *       response=200,
     *         description="Success"
     *     ),
     * )
     */
    public function deletebook($id)
    {
        DB::table('books')->delete($id);
        $books = DB::table('books')->get();
        return response()->json($books);
    }
}
