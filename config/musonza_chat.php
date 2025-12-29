<?php

return [
    /*
     * This will allow you to broadcast an event when a message is sent
     * Example:
     * Channel: mc-chat-conversation.2,
     * Event: Musonza\Chat\Eventing\MessageWasSent
     */
    'broadcasts' => false,

    /*
     * Specify the fields that you want to return each time for the sender.
     * If not set or empty, all the columns for the sender will be returned
     *
     * However, if using multiple Models it's recommended to add getParticipantDetails to each
     * Model you want to control fields output.
     */

    /*
     * Specify the fields that you want to return each time for the sender.
     * If not set or empty, all the columns for the sender will be returned
     */
    'sender_fields_whitelist' => [],

    /*
     * Whether to load the package routes file in your application.
     * NOTE: Changed to false by default in upstream v6.5.0
     */
    'should_load_routes' => false,

    /*
     * Routes configuration
     */
    'routes' => [
        'path_prefix' => 'chat',
        'middleware'  => ['web'],
    ],

    /*
     * Default values for pagination
     */
    'pagination' => [
        'page'     => 1,
        'perPage'  => 25,
        'sorting'  => 'asc',
        'columns'  => ['*'],
        'pageName' => 'page',
    ],

    /*
     * Model Transformers
     */
    'transformers' => [
        'conversation' => null,
        'message'      => null,
        'participant'  => null,
    ],

    /*
     * Controls the batch size for notification inserts to improve
     * performance when handling large conversations.
     */
    'batch_insert_size' => env('MUSONZA_CHAT_BATCH_INSERT_SIZE', 1000),
];
