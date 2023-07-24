<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="Test for job",
 *     version="1.0",
 *     description="My first Swagger API"
 * ),
 *
 *
 *
 * @OA\PathItem(
 *     path="/api/v1"
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/v1/filials",
 *     summary="Список всех филиалов",
 *     tags={"Filials"},
 *
 *     @OA\Response(
 *         response="200",
 *         description="All filials",
 *
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                     @OA\Property(property="id", type="integer", example="1"),
 *                     @OA\Property(property="name", type="string", example="Misha"),
 *             )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Post(
 *     path="/api/v1/filials",
 *     summary="Создать филиал",
 *     tags={"Filials"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Name")
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response="201",
 *         description="Filial was created",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *
 *                 @OA\Property(property="id", type="integer", example="1"),
 *                 @OA\Property(property="name", type="string", example="Name"),
 *              ),
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response="422",
 *         description="Error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Text message"),
 *
 *
 *             @OA\Property(property="errors", type="object",
 *
 *                 @OA\Property(property="name", type="array", @OA\Items()),
 *             ),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Get(
 *     path="/api/v1/filials/{filial}",
 *     summary="Получить 1 филиал и его работников",
 *     tags={"Filials"},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="filial",
 *         required=true,
 *         example="1"
 *     ),
 *
 *     @OA\Response(
 *         response="200",
 *         description="One filial",
 *
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                     @OA\Property(property="id", type="integer", example="1"),
 *                     @OA\Property(property="name", type="string", example="Filial name"),
 *                     @OA\Property(property="employees", type="array", @OA\Items(
 *
 *                         @OA\Property(property="id", type="integer", example="1"),
 *                         @OA\Property(property="name", type="string", example="name"),
 *                         @OA\Property(property="position", type="string", example="position"),
 *
 *                     )),
 *             )),
 *         ),
 *     ),
 * ),
 *
 *
 *
 * @OA\Post(
 *     path="/api/v1/filials/{filial}/employees",
 *     summary="Создать работника филиала",
 *     tags={"Employees"},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="filial",
 *         required=true,
 *         example="1"
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Name"),
 *                     @OA\Property(property="position", type="integer", example="1", description="1 or 2"),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response="201",
 *         description="Employee was created",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *
 *                 @OA\Property(property="id", type="integer", example="1"),
 *                 @OA\Property(property="name", type="string", example="Name"),
 *                 @OA\Property(property="position", type="integer", example="1"),
 *              ),
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response="422",
 *         description="Error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Text message"),
 *
 *             @OA\Property(property="errors", type="object",
 *
 *                 @OA\Property(property="name", type="array", @OA\Items()),
 *             ),
 *         ),
 *     ),
 * ),
 */
class FilialController extends Controller
{
    //
}
