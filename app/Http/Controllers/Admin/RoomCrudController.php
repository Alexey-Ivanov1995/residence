<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoomRequest;
use App\Models\Apartment;
use App\Models\Room;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RoomCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RoomCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Room::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/room');
        CRUD::setEntityNameStrings('room', 'rooms');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

//        CRUD::setFromDb(); // columns
        CRUD::addColumns($this->getColumns());

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RoomRequest::class);

        CRUD::addFields($this->getFields());

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


    public function getColumns(): array
    {

        return [
//            [
//                'label' => 'apartments',
//                'name' => 'apartment_id',
//                'type' => 'closure',
//                'function' => function($entry){
//                    $ggg = Room::get();
//                    return  $ggg[$entry->apartment_id - 1]->apartment->title;
////                    return $ggg[1];
//                }
//            ],
             [
                'label' => 'apartments',
                'name' => 'apartment',
                'type' => 'relationship',
                 'attribute' => 'title'

            ],

            [
                'label' => 'persons',
                'name' => 'persons',
                'type' => 'number',
            ],

            [
                'label' => 'floor',
                'name' => 'floor',
                'type' => 'text',
            ],
        ];
    }
    public function getFields(): array
    {
        return [

            [
                'label' => 'apartments',
                'name' => 'apartment_id',
                'type' => 'select2_from_array',
                'options' => $this->apartments(),


            ],
            [
                'label' => 'persons',
                'name' => 'persons',
                'type' => 'number',
                'attributes' => [
                    'min' => 1,
                    'value' => '1',
                ]
            ],
            [
                'label' => 'size',
                'name' => 'size',
                'type' => 'text',
            ],
            [
                'label' => 'view',
                'name' => 'view',
                'type' => 'text',
            ],
            [
                'label' => 'floor',
                'name' => 'floor',
                'type' => 'text',
                'text' => 'aszd'
            ],
            [
                'label' => 'description',
                'name' => 'description',
                'type' => 'textarea',
                'attributes' => [
                    'placeholder' => 'write you description',

                ]

            ],
        ];
    }

    private function apartments() : array
    {
        $posts = (new Apartment())->get();
        $responsePost = [];

        foreach ($posts as $post) {
            $responsePost[$post->id] = $post->title;
        }
        return  $responsePost;
    }
//    private function room() : array
//    {
//        $postss = (new Room())->get();
//        $responsePost = [];
//        dd($postss[3]->apartment->title);
//        foreach ($posts as $post) {
//            $responsePost[$post->id] = $post->title;
//        }
//        return  $responsePost;
//    }

}
